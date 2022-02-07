<template>
  <v-app-bar
    v-if="user"
    height="80" 
    outlined
  >

    
    <nuxt-link
      to="/home"
      style="text-decoration: none; color: inherit;"
    >
      <!-- <v-app-bar-title>
        {{ appName }}
      </v-app-bar-title> -->
      HXM
    </nuxt-link>

      <v-container  class="pl-12">

        <v-menu offset-x>
          <template v-slot:activator="{ on, attrs }">
            <v-btn 
              plain 
              v-bind="attrs"
              v-on="on">
              <v-icon right class="pr-3">fa fa-home</v-icon>
                Home
              <v-icon right>fa fa-angle-down</v-icon>
            </v-btn>
          </template>
          <v-list>
            <v-list-item
              v-for="item in items" 
              :key="item"
              @click="getModuleValue(item.id)"
            >
              <v-list-item-title>{{item.name}}</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>
        
      </v-container>    

  
    <!-- <v-spacer></v-spacer> -->
      
    <v-menu offset-y>  
      <template v-slot:activator="{ on, user}">
        <v-btn 
          plain 
          v-bind="user"
          v-on="on"
        >
          <img class="rounded-circle" width="30" height="30" src="@/assets/sass/img/avatars/user-01.png" />

          <!-- <v-icon right class="pr-3">fa fa-home</v-icon>
            Home-->
          <v-icon right>fa fa-angle-down</v-icon>
        </v-btn>
      </template>
      <v-list width="150">
        
        <v-list-item :to="{ name: 'admin' }" active-class="blue--text">
          <v-list-item-title>
            <v-icon>fa fa-user</v-icon>
            Import Files
          </v-list-item-title>
        </v-list-item>
         <v-list-item :to="{ name: 'supervisor.index' }" active-class="blue--text">
          <v-list-item-title>
            <v-icon>fa fa-user</v-icon>
            Supervisor
            </v-list-item-title>
        </v-list-item> 
        <v-list-item :to="{ name: 'settings.profile' }" active-class="blue--text">
          <v-list-item-title>
            <v-icon>fa fa-cog</v-icon>
            Setting
            </v-list-item-title>
        </v-list-item>
        <v-list-item @click.prevent="logout">
          <v-list-item-title>
            <v-icon>fa fa-sign-out</v-icon>
            Logout
            </v-list-item-title>
        </v-list-item>
      </v-list>

        <!-- <ul class="navbar-nav ml-auto">
          <li v-if="user" class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-white"
              href="#"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img class="rounded-circle" width="30" height="30" src="@/assets/sass/img/avatars/user-01.png" />
            </a>
            <div class="dropdown-menu">
              <nuxt-link
                :to="{ name: 'settings.profile' }"
                class="dropdown-item pl-3"
              >
                <fa icon="cog" fixed-width />
                Setting
              </nuxt-link>

              <div class="dropdown-divider" />
                <a class="dropdown-item pl-3" href="#" @click.prevent="logout">
                  <fa icon="sign-out-alt" fixed-width />
                  Logout
                </a>
              </div>
          </li>
        </ul>
          
      </template> -->
    </v-menu>

  </v-app-bar>
</template>


<script>
import { mapGetters, mapActions } from 'vuex'
export default {
  components: {
  },

  data () {
    return{
      items: [
        {id: 'admin-center', name: 'Admin Center'},
        {id: 'employee-profile', name: 'Employee profile'},
        {id: 'work-schedule', name: 'Work Schedule'},
        {id: 'leave-management', name: 'Holiday Calender'},
        {id: 'reporting', name: 'Reporting'},
      ],
      appName: process.env.appName
    }
  },

   computed: mapGetters({
    user: 'auth/user',
    moduleList: 'admin-center/getModuleList'
  }),

  methods: {
    ...mapActions({
      changeModule: 'admin-center/changeModule'
    }),
    getModuleValue (val) {
      console.log('val: ', val);
      if (val === 'employee-profile') {
        this.$router.push('/employee')
      } else if (val === 'work-schedule') {
        this.$router.push('/workschedule')
      } else if (val === 'leave-management') {
        this.$router.push('/leavemanagment')
      } else if (val === 'admin-center') {
        this.$router.push('/admincenter')
      }else{
        this.$router.push('/reporting')
      }
    },

    handleChange(){
    },

    async logout() {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    },

  }, 
}
</script>
<style scoped>
.bg-info {
  background-color: #346596 !important;
}



.header{
border: 1px solid rgb(235, 237, 240);
}
.profile-photo {
  width: 2rem;
  height: 2rem;
  margin: -0.375rem 0;
}
</style>