import Vue from 'vue'
import ProfileHeader from './profile/ProfileHeader.vue'

[
  ProfileHeader,
].forEach(Component => {
  Vue.component(Component.name, Component)
})

