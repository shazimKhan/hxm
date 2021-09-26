<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container">
        <router-link
          :to="{ name: user ? 'home' : 'welcome' }"
          class="navbar-brand text-white"
        >
          {{ appName }}
          <nuxt-link to="/admin-center" />
        </router-link>
        <div v-if="user" class="nav-item dropdown">
          <a-col :span="4">
            <a-select
              :default-value="moduleList"
              style="width: 200px"
              @change="getModuleValue"
            >
              <a-select-option value="admin-center">
                Admin Center
              </a-select-option>
              <a-select-option value="employee-profile">
                Employee profile
              </a-select-option>
              <a-select-option value="work-schedule">
                Work Schedule
              </a-select-option>
              <a-select-option value="leave-management">
                Holiday Calender
              </a-select-option>
            </a-select>
          </a-col>
        </div>

        <div id="navbarToggler" class="collapse navbar-collapse pl-5">
          <ul class="navbar-nav ml-auto">
            <!-- Authenticated -->
            <li v-if="user" class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-white"
                href="#"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <!-- <img
                  :src="user.photo_url"
                  class="rounded-circle profile-photo mr-1"
                > -->
                <a-avatar :size="40" icon="user" />
              </a>
              <div class="dropdown-menu">
                <router-link
                  :to="{ name: 'settings.profile' }"
                  class="dropdown-item pl-3"
                >
                  <fa icon="cog" fixed-width />
                  Setting
                </router-link>

                <router-link
                  :to="{ name: 'supervisor.index' }"
                  class="dropdown-item pl-3"
                >
                  <fa icon="cog" fixed-width />
                  Supervisor
                </router-link>
                <div class="dropdown-divider" />
                <a class="dropdown-item pl-3" href="#" @click.prevent="logout">
                  <fa icon="sign-out-alt" fixed-width />
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
// import LocaleDropdown from './LocaleDropdown'

export default {
  components: {
    // LocaleDropdown
  },

  data: () => ({
    appName: process.env.appName
  }),

  computed: mapGetters({
    user: 'auth/user',
    moduleList: 'admin-center/getModuleList'
  }),

  methods: {
    ...mapActions({
      changeModule: 'admin-center/changeModule'
    }),
    getModuleValue (val) {
      if (val === 'employee-profile') {
        this.$router.push('/employee')
      } else if (val === 'work-schedule') {
        this.$router.push('/workschedule')
      } else if (val === 'leave-management') {
        this.$router.push('/leavemanagment')
      } else {
        this.$router.push('/admincenter')
      }
    },
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    }
  }
}
</script>

<style lang="scss">
.bg-info {
  background-color: #346596 !important;
}
.navbar {
  .ant-select-selection {
    background-color: #22214e86;
    border: 1px #020e0f;
    color: white;
  }
}
.profile-photo {
  width: 2rem;
  height: 2rem;
  margin: -0.375rem 0;
}
</style>
