<template>
  <!-- <v-app> -->
    <v-navigation-drawer
      v-if="user"
      :mini-variant="mini"
      :clipped="clipped"
      width="280"
      fixed
      app
      dark
    >

      <v-list nav>
        <v-app-bar-nav-icon @click="coll"></v-app-bar-nav-icon>
        <nuxt-link
          to="/home"
          class="navbar-brand text-white"
        >
          {{ appName }}
        </nuxt-link>
      </v-list>

    <v-list>
      <v-list-group>
        <template v-slot:activator>
          <v-list-item-action>
            <v-icon>mdi-home</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Home</v-list-item-title>
          </v-list-item-content>
        </template>

        <v-list-item
         v-for="item in items" 
          :key="item"
          @click="getModuleValue(item.id)"
          dense
        >
          <v-list-item-content>
            <v-list-item-title>{{item.name}}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list-group>
    </v-list>

      <!-- <v-list
        nav
        dense
      >
        <v-list-item link>
          <v-list-item-icon>
            <v-icon>mdi-folder</v-icon>
          </v-list-item-icon>
          <v-list-item-title>My Files</v-list-item-title>

        </v-list-item>
        <v-list-item link>
          <v-list-item-icon>
            <v-icon>mdi-account-multiple</v-icon>
          </v-list-item-icon>
          <v-list-item-title>Shared with me</v-list-item-title>
        </v-list-item>
        <v-list-item link>
          <v-list-item-icon>
            <v-icon>mdi-star</v-icon>
          </v-list-item-icon>
          <v-list-item-title>Starred</v-list-item-title>
        </v-list-item>
      </v-list> -->

      <!-- <template>
      
      <ColorModePicker/>

      <v-spacer></v-spacer>

      <a-select
        :default-value="dropdownList"
        style="width: 200px"
        @change="getDropdownValue"
      >
        <a-select-option value="none">
          None
        </a-select-option>
        <a-select-option value="payroll">
          Payroll
        </a-select-option>
        <a-select-option value="department">
          Department
        </a-select-option>
      </a-select>

      <a-select
        :default-value="moduleList"
        style="width: 200px"
        @change="getModuleValue"
      >
        <a-select-option value="admin-center">
          Admin Center
        </a-select-option>
        <a-select-option value="payroll">
          Payroll
        </a-select-option>
        <a-select-option value="department">
          Department
        </a-select-option>
      </a-select>
    </template> -->

      <template v-slot:append>
        <v-list
          nav
          dense
        >
          <v-list-item link :to="{ name: 'settings.profile' }">
            <v-list-item-icon>
              <v-icon>mdi-cog-outline</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Settings</v-list-item-title>
          </v-list-item>

          <v-list-item link :to="{ name: 'admin' }">
            <v-list-item-icon>
              <v-icon>fa fa-user</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Admin</v-list-item-title>
          </v-list-item>
          
          <v-list-item link @click.prevent="logout">
            <v-list-item-icon>
              <v-icon>mdi-application-export</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Logout</v-list-item-title>
          </v-list-item>
        </v-list>
      </template>
    </v-navigation-drawer>

  <!-- </v-app> -->
</template>
<script>
import { mapGetters, mapActions } from 'vuex'
import ColorModePicker from '@/components/ColorModePicker'
export default {
    components: {
      ColorModePicker
    },
    data () {
      return{
        clipped: false,
        mini: false,
        fixed: false,
        collapseOnScroll: true,
        appName: 'HXM',
        items: [
        {id: 'admin-center', name: 'Admin Center'},
        {id: 'employee-profile', name: 'Employee profile'},
        {id: 'work-schedule', name: 'Work Schedule'},
        {id: 'leave-management', name: 'Holiday Calender'},
        {id: 'reporting', name: 'Reporting'},
      ],
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
      coll(){
        this.mini=!this.mini;
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