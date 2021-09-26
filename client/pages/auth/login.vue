<template>
  <div class="app flex-row align-items-center">
    <div class="container">
      <b-row class="justify-content-center">
        <b-col md="5">
          <b-card-group class="shadow">
            <b-card no-body class="p-4">
              <b-card-body>
                <b-form class="form" @submit.prevent="login" @keydown="form.onKeydown($event)">
                  <h1>Login</h1>
                  <p class="text-muted">
                    Sign In to your account
                  </p>

                  <!-- Email -->
                  <div class="form-group row">
                    <b-input-group class="mb-3">
                      <b-input-group-prepend>
                        <b-input-group-text><a-icon type="user" /></b-input-group-text>
                      </b-input-group-prepend>
                      <b-form-input
                        v-model="form.email"
                        :class="{ 'is-invalid': form.errors.has('email') }"
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter your email"
                      />
                    </b-input-group>
                  </div>

                  <!-- Password -->
                  <div class="form-group row">
                    <b-input-group class="mb-4">
                      <b-input-group-prepend>
                        <b-input-group-text>
                          <a-icon type="lock" />
                        </b-input-group-text>
                      </b-input-group-prepend>
                      <b-form-input
                        v-model="form.password"
                        :class="{ 'is-invalid': form.errors.has('password') }"
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Enter your password"
                      />
                    </b-input-group>
                  </div>

                  <b-row>
                    <!-- Remember Me -->
                    <div class="col-md-3" />
                    <!-- <b-col :span="5">
                          <checkbox v-model="remember" name="remember">
                            {{ $t("remember_me") }}
                          </checkbox>
                          </b-col> -->
                  </b-row>
                  <b-row>
                    <div class="form-group row">
                      <!-- Submit Button -->
                      <b-col :span="10">
                        <!-- <a-button
                            type="primary"
                            block
                            :loading="form.busy"
                            >
                             {{ $t("Login") }}
                            </a-button> -->

                        <v-button
                          large
                          rounded
                          :loading="form.busy"
                        >
                          {{ $t("Login") }}
                        </v-button>
                        <!-- GitHub Login Button -->
                        <login-with-github />
                      </b-col>
                      <b-col :span="6">
                        <b-row :span="10">
                          <router-link
                            :to="{ name: 'password.request' }"
                            class="small ml-auto my-auto"
                          >
                            {{ $t("forgot_password") }}
                          </router-link>
                        </b-row>
                      </b-col>
                    </div>
                  </b-row>
                </b-form>
              </b-card-body>
            </b-card>
          </b-card-group>
        </b-col>
      </b-row>
    </div>
  </div>
</template>

<script>
import Form from 'vform'
import { mapGetters } from 'vuex'
export default {
  middleware: 'guest',

  data: () => ({
    form: new Form({
      email: '',
      password: ''
    }),
    remember: false
  }),

  head () {
    return { title: this.$t('login') }
  },
  computed: mapGetters({
    user: 'auth/user'
  }),
  methods: {

    async login () {
      let data

      // Submit the form.
      try {
        const response = await this.form.post('/login')
        data = response.data
      } catch (e) {
        return
      }
      // Save the token.
      this.$store.dispatch('auth/saveToken', {
        token: data.token,
        remember: this.remember
      })

      // Fetch the user.
      await this.$store.dispatch('auth/fetchUser')
      // if (this.user.role.name === 'Admin') {
      // Redirect home.
      this.$router.push({ name: 'admin' })
      // }
    }
  }
}
</script>
<style>
.app {
    background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Others/architecture.jpg);
    background-position: center center;
    height: calc(100vh - 60px);
    display: flex;

}
.shadow {
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%) !important;
    text-align: left;
}
.p-4
{
  background: #a0cce9 !important;
      padding: 1.5rem !important;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.form {

    font-family: "Segoe UI", "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 0.875rem;
    line-height: 1.5;
    color: #000000;
    text-align: left;

}
</style>
