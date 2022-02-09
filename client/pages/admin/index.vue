<template>
 
  <v-app>
  <v-row class="mx-0">
  <v-col cols="3">
    <v-card
     outlined
    >
      <v-list
       outlined
      >
        <v-card-title>
            Admin
        </v-card-title>
          <v-list-item v-for="tab in tabs" :key="tab.route" :to="{ name: tab.route }" active-class="blue--text">
            {{ tab.name }}
          </v-list-item>        

        <!-- <v-list-group>
          <template v-slot:activator>
            <v-list-item-content>
              <v-list-item-title>Table Lists</v-list-item-title>
            </v-list-item-content>
          </template>

          <v-list-item
            v-for="item in data" 
            :key="item.formName"
             @click="getModuleValue(item.formName)"
             dense
          >
            <v-list-item-content>
              <v-list-item-title v-text="item.formName"></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list-group> -->
      </v-list>
    </v-card>
  </v-col>

  <v-col cols="9">
    <nuxt/>
  </v-col>
  </v-row>
</v-app>
</template>

<script>
import Center from '@/components/Center'
export default {
  components: {

    Center
  },

  data() {
    return {
        data: [],
        tabs: [
            {
            //   icon: 'user',
            name: 'Import Table',
            route: 'admin.importTable'
            }
            // {
            // //   icon: 'lock',
            // name: 'Import Data',
            // route: 'admin.importData'
            // }
        ]
    }
  },

  middleware: 'auth',
  
}
</script>

<style>
</style>
