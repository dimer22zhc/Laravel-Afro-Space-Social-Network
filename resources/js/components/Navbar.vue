<template>
    <header class="header" style="box-shadow: 1px 1px 20px -15px black;" id="site-header">
    <div class="container">
      <div class="page-title">
         <router-link :to="{ name: user ? 'home' : 'welcome' }" >
            {{ appName }}
          </router-link>
      </div>

      <div class="header-content-wrapper" >
        <locale-dropdown class="link-hearder" />
        <a v-if="!user" href="#" class="link-hearder">Home</a>
        <a v-if="!user" href="#" class="link-hearder">About</a>

        <div class="control-block">
          <form v-if="user" class="search-bar w-search notification-list friend-requests" style="height: 30px;">
            <div class="form-group with-button" style="height: 30px;">
              <input class="form-control" placeholder="Search here people or pages..." type="text">
              <button>
                <svg class="olymp-magnifying-glass-icon">
                  <use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use>
                </svg>
              </button>
            </div>
          </form>
          <router-link :to="{ name:'profile', params:{ name : user.name , id:user.id } }" v-if="user" class="author-page author vcard inline-items more mr-4">
            <div class="author-thumb">
              <img alt="author" :src="user.photo_url" class="avatar" height="35" width="35">
              <span class="icon-status online"></span>
            </div>
            <a class="author-name fn">
              <div class="author-title">
                James Spiegel
              </div>
              <span class="author-subtitle">SPACE COWBOY</span>
            </a>
          </router-link>
          <div v-if="user" class="control-icon more has-items">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            <div class="label-avatar bg-blue">6</div>

            <div class="more-dropdown more-with-triangle triangle-top-center">
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">FRIEND REQUESTS</h6>
                <a href="#">Find Friends</a>
                <a href="#">Settings</a>
              </div>

              <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="notification-list friend-requests">
                  <li class="accepted">
                    <div class="author-thumb">
                      <img src="img/avatar57-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                      You and
                      <a class="h6 notification-friend">
                        Mary Jane
                        Stark
                      </a> just became friends. Write on
                      <a href="#" class="notification-link">her wall</a>.
                    </div>
                    <span class="notification-icon">
                      <svg class="olymp-happy-face-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
                      </svg>
                    </span>

                    <div class="more">
                      <svg class="olymp-three-dots-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                      </svg>
                      <svg class="olymp-little-delete">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use>
                      </svg>
                    </div>
                  </li>
                </ul>
              </div>

              <a href="#" class="view-all bg-blue">Check all your Events</a>
            </div>
          </div>

          <div v-if="user" class="control-icon more has-items">
            <svg class="olymp-chat---messages-icon">
              <use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            <div class="label-avatar bg-purple">2</div>

            <div class="more-dropdown more-with-triangle triangle-top-center">
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Chat / Messages</h6>
                <a href="#">Mark all as read</a>
                <a href="#">Settings</a>
              </div>

              <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="notification-list chat-message">
                  <li class="message-unread">
                    <div class="author-thumb">

                      <img :src="user.photo_url" alt="author">
                    </div>
                    <div class="notification-event">
                      <a href="#" class="h6 notification-friend"> {{ user.name }}</a>
                      <span class="chat-message-item">
                        Hi James! It’s Diana, I just wanted
                        to let you know that we have to reschedule...
                      </span>
                      <span class="notification-date">
                        <time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time>
                      </span>
                    </div>
                    <span class="notification-icon">
                      <svg class="olymp-chat---messages-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                      </svg>
                    </span>
                    <div class="more">
                      <svg class="olymp-three-dots-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                      </svg>
                    </div>
                  </li>
                </ul>
              </div>

              <a href="#" class="view-all bg-purple">View All Messages</a>
            </div>
          </div>

          <!-- <div v-if="user" class="control-icon more has-items">
            <svg class="olymp-thunder-icon">
              <use xlink:href="svg-icons/sprites/icons.svg#olymp-thunder-icon"></use>
            </svg>
            <div class="label-avatar bg-primary" v-text="notifs.length"></div>
            <div v-if="notifs.length" class="more-dropdown more-with-triangle triangle-top-center">
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Notifications</h6>
                <a href="#">Mark all as read</a>
                <a href="#">Settings</a>
              </div>
              <vue-custom-scrollbar :settings="settings" style="overflow: hidden;max-height: 300px; ">
                <ul class="notification-list" >
                  <li class="un-read" v-for="(item,index) in notifs" :key="item.id">
                    <div class="author-thumb">
                      <img src="img/avatar63-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                      <div class="cursor-pointer">
                        A new User name
                        <span class="h6 notification-friend">
                         {{ item.data.createdUser.name | capitalize}}
                        </span>
                        Was created
                        <a href="#" class="notification-link"></a>.
                      </div>
                      <span class="notification-date">
                        <time class="entry-date updated" datetime="2004-07-24T18:18"> {{ item.data.createdUser.created_at }}</time>
                      </span>
                    </div>
                    <div class="more">
                      <svg class="olymp-three-dots-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                      </svg>
                      <svg class="olymp-little-delete" @click="markAsRead(index)">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use>
                      </svg>
                    </div>
                  </li>
                </ul>
              </vue-custom-scrollbar>
              <a href="#" class="view-all dg-btn--ok" v-if="notifs.length">View All Notifications</a>
            </div>
          </div> -->

          <div v-if="user" class="author-page author vcard inline-items more">
            <a class="author-name fn">
              <div class="author-title">
                 <a-icon type="setting"  style="font-size:20px"/>
              </div>
            </a>
          </div>
        </div>
      </div>
      </div>

    </header>
</template>

<script>
import { mapGetters } from 'vuex'
import LocaleDropdown from './LocaleDropdown'

export default {
  components: {
    LocaleDropdown
  },

  data: () => ({
    appName: window.config.appName
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),

  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    }
  }
}
</script>

<style scoped>
.profile-photo {
  width: 2rem;
  height: 2rem;
  margin: -.375rem 0;
}
</style>
