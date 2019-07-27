import Vue from 'vue'
import ProfileHeader from './profile_components/ProfileHeader.vue'
import GridLayout from './GridLayout.vue'
import ProfileIntroInfo from './profile_components/ProfileIntroInfo.vue'

[
  ProfileIntroInfo,
  GridLayout,
  ProfileHeader,
].forEach(Component => {
  Vue.component(Component.name, Component)
})

