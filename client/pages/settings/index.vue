<template>
<v-app>
  <v-row class="mx-0">
  <v-col cols="3">
    <v-card
      outlined
    >
      <v-card-title>
        Setting
      </v-card-title>

      <v-list>
        <v-list-group justify="space-around">
          <template v-slot:activator>
            <v-icon small class="pr-3">fa fa-paint-brush</v-icon>
            <v-list-item-content>
              <v-list-item-title>Themes</v-list-item-title>
            </v-list-item-content>
          </template>

          <v-list-item
            v-for="color of colors" 
            :key="color"
            @click="$colorMode.preference = color" :class="getClasses(color)" 
          >
          <component :is="`icon-${color}`"/>
            <v-list-item-content>
              <v-list-item-title v-text="color"></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list-group>

        <v-list-item v-for="tab in tabs" :key="tab.route" :to="{ name: tab.route }" active-class="blue--text">
            <v-icon  class="pr-3" :class="tab.icon"></v-icon>
            {{ tab.name }}
        </v-list-item>
    </v-list>

    </v-card>
  </v-col>

  <v-col cols="9">
    <transition name="fade" mode="out-in">
      <nuxt />
  </transition>
  </v-col>
  </v-row>
</v-app>
  
  <!-- <div class="row">
    <div class="col-md-3">
      <card :title="$t('settings')" class="settings-card">
        <ul class="nav flex-column nav-pills">
          <li v-for="tab in tabs" :key="tab.route" class="nav-item">
            <router-link :to="{ name: tab.route }" class="nav-link" active-class="active">
              <fa :icon="tab.icon" fixed-width />
              {{ tab.name }}
            </router-link>
          </li>
        </ul>
      </card>
    </div>

    <div class="col-md-9">
      <transition name="fade" mode="out-in">
        <router-view />
      </transition>
    </div>
  </div> -->
</template>

<script>
import IconLight from '@/assets/sass/icons/light.svg?inline'
import IconDark from '@/assets/sass/icons/dark.svg?inline'
import IconSepia from '@/assets/sass/icons/sepia.svg?inline'

export default {
  components: {
    IconLight,
    IconDark,
    IconSepia
  },

  data() {
    return {
      colors: ['light', 'dark', 'sepia'],
      tabs: [
        {
          icon: 'fa fa-user',
          name: this.$t('profile'),
          route: 'settings.profile'
        },
        {
          icon: 'fa fa-lock',
          name: this.$t('password'),
          route: 'settings.password'
        }
      ]
    }
  },

  middleware: 'auth',

  computed: {
    // tabs () {
    //   return [
    //     {
    //       icon: 'user',
    //       name: this.$t('profile'),
    //       route: 'settings.profile'
    //     },
    //     {
    //       icon: 'lock',
    //       name: this.$t('password'),
    //       route: 'settings.password'
    //     }
    //   ]
    // }
  },

    methods: {
      getClasses (color) {
        // Does not set classes on ssr when preference is system (because we don't know the preference until client-side)
        if (this.$colorMode.unknown) {
          return {}
        }
        return {
          preferred: color === this.$colorMode.preference,
          selected: color === this.$colorMode.value
        }
      }
    }
}
</script>

<style>

</style>
