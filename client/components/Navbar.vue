<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
      <router-link
        :to="{ name: user ? 'home' : 'welcome' }"
        class="navbar-brand text-white"
      >
        {{ appName }}
      </router-link>

      <button
        :aria-label="$t('toggle_navigation')"
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarToggler"
        aria-controls="navbarToggler"
        aria-expanded="false"
      >
        <span class="navbar-toggler-icon" />
      </button>
      <div id="navbarToggler" class="collapse navbar-collapse pl-5">
        <ul class="navbar-nav">
          <!-- <locale-dropdown /> -->
          <li v-if="user" class="nav-item dropdown">
            <!-- <a
              class="nav-link dropdown-toggle text-white"
              href="#"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            > -->
            <a-select
              :default-value="moduleList"
              style="width: 200px"
              class="bg-info"
              @change="getModuleValue">
              <a-select-option value="admin-center"
                >Admin Center</a-select-option
              >
              <a-select-option value="employee-profile"
                >Employee profile</a-select-option
              >
              <a-select-option value="work-schedule"
                >Work Schedule</a-select-option
              >
              <a-select-option value="leave-management"
                >Leave Management</a-select-option
              >
            </a-select>
            <!-- </a> -->
          </li>
        </ul>

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
              <img
                :src="user.photo_url"
                class="rounded-circle profile-photo mr-1"
              />
            </a>
            <div class="dropdown-menu">
              <router-link
                :to="{ name: 'settings.profile' }"
                class="dropdown-item pl-3"
              >
                <fa icon="cog" fixed-width />
                Setting
              </router-link>

              <div class="dropdown-divider" />
              <a class="dropdown-item pl-3" href="#" @click.prevent="logout">
                <fa icon="sign-out-alt" fixed-width />
                Logout
              </a>
            </div>
          </li>
          <!-- Guest -->
          <template v-else>
            <!-- <li class="nav-item">
              <router-link :to="{ name: 'login' }" class="nav-link" active-class="active">
                {{ $t('login') }}
              </router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'register' }" class="nav-link" active-class="active">
                {{ $t('register') }}
              </router-link>
            </li> -->
          </template>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import LocaleDropdown from "./LocaleDropdown";

export default {
  components: {
    LocaleDropdown,
  },

  data: () => ({
    appName: process.env.appName,
  }),

  computed: mapGetters({
    user: "auth/user",
    moduleList: "admin-center/getModuleList",
  }),

  methods: {
    ...mapActions({
      changeModule: "admin-center/changeModule",
    }),
    getModuleValue(val) {
      console.log(val);
      this.changeModule(val);
    },
    async logout() {
      // Log out the user.
      await this.$store.dispatch("auth/logout");

      // Redirect to login.
      this.$router.push({ name: "login" });
    },
  },
};
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
