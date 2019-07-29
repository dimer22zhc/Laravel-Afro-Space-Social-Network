<template>
  <div>
    <div class="container">
      <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
          <div class="ui-block">
            <div class="top-header">
              <div class="top-header-thumb">
                <img  src="/img/top-header1.jpg" alt="nature" />
              </div>
              <div class="profile-section">
                <div class="row">
                  <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                    <ul class="profile-menu">
                      <li>
                        <router-link :to="{name:'profile', params:{ name:user.name}}"

                        >Timeline</router-link>

                      </li>
                      <li>
                        <router-link :to="{ name:'about.user', params:{ name: user.name} }">About</router-link>
                      </li>
                    </ul>
                  </div>
                  <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                    <ul class="profile-menu">
                      <li>
                        <a href="#">
                          Friends
                          <small style="color:black">
                            <strong>(11)</strong>
                          </small>
                        </a>

                      </li>
                       <li>
                        <a href="#"

                        >Impact</a>

                      </li>
                      <li>
                        <!-- <a href="09-ProfilePage-Videos.html"></a> -->
                      </li>
                      <li>
                        <div class="more">
                          <a-icon type="setting" theme="filled" />
                          <ul class="more-dropdown more-with-triangle">
                            <li>
                              <a href="#">Report Profile</a>
                            </li>
                            <li>
                              <a href="#">Block Profile</a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- <friend></friend> -->
              </div>
              <div class="top-header-author">
                <a href="02-ProfilePage.html" class="author-thumb">
                  <img src="/img/author-main1.jpg" alt="author" />
                </a>
                <div class="author-content">
                  <a href="02-ProfilePage.html" class="h4 author-name">James Spiegel</a>
                  <div class="country">San Francisco, CA</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
 import { mapGetters} from 'vuex'
  export default {
    name:"ProfileHeader",
    computed: {
      ...mapGetters({
        user:'auth/user'
      })
    },

  }
</script>

<style lang="scss" scoped>
ul.profile-menu a:hover {
  background-color: #eaebf3;
}
.active {
  color: #0d0d0e;
}
.icons-list >>> .anticon {
  font-size: 25 px;
}
// ul.profile-menu li{
//   padding: 10px 10px
// }
ul.profile-menu a {
  padding: 5px 20px 5px 20px;
  color: rgba(4, 109, 158, 0.979);
}
.btn-control-profile {
  padding: 5px;
  fill: #fff;
}
a.h4.author-name {
  text-shadow: 0px 4px 5px #3c3b3b;
  color: #dbe1ff;
}
.country {
  text-shadow: 0px 1px 1px black;
}
.btn.btn-control.bg-primary.more {
  border-radius: 0px;
}
</style>
