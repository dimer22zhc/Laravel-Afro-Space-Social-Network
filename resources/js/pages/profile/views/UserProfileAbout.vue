<template>
  <div>
     <Grid :size_1="4" :size_0="8" :size_2="1">
      <template v-slot:middle>
        <div class="ui-block">
          <div class="ui-block-title p-3">
            <div class="h6 title">Available Widgets</div>
            <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
          </div>
        </div>
        <div class="ui-block">
				<div class="ui-block-title p-2">
					<h6 class="title">Hobbies and Interests</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<div class="row">
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">


							<!-- W-Personal-Info -->

							<ul class="widget w-personal-info item-block">
								<li @mouseover="() => edit=true" @mouseleave="() => edit=false">
									<span class="title">Hobbies:</span>
									<span :class="'text ' + classes">
                    I like to ride the bike to work binge watching a good tv show while it’s raining outside.
									</span>
                  <span v-if="edit"><a href="#" class="link-site"><a-icon type="edit" /> Edit your Hobbies</a></span>
								</li>
							</ul>

							<!-- ... end W-Personal-Info -->
						</div>
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">


							<!-- W-Personal-Info -->

							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">Favourite Music Bands / Artists:</span>
									<span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
								</li>
							</ul>

							<!-- ... end W-Personal-Info -->
						</div>
					</div>
				</div>
			</div>
      </template>
      <template v-slot:right>
        <div class="ui-block">

          <!-- Your Profile  -->

          <div class="your-profile">
            <div class="ui-block-title ui-block-title-small">
              <h6 class="title">Your PROFILE</h6>
            </div>

            <div id="accordion" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h6 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Profile Settings
                      <svg class="olymp-dropdown-arrow-icon"><use xlink:href="#olymp-dropdown-arrow-icon"></use></svg>
                    </a>
                  </h6>
                </div>

                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                  <ul class="your-profile-menu">
                    <li>
                      <a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
                    </li>
                    <li>
                      <a href="29-YourAccount-AccountSettings.html">Account Settings</a>
                    </li>
                    <li>
                      <a href="30-YourAccount-ChangePassword.html">Change Password</a>
                    </li>
                    <li>
                      <a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
                    </li>
                    <li>
                      <a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- ... end Your Profile  -->

			  </div>
      </template>
      <template v-slot:left>
        left
      </template>
    </Grid>
  </div>
</template>

<script>
  export default {
    name: "UserProfileAbout",
    data() {
      return {
        edit:false
      }
    },
    computed: {
      classes(){
        return this.edit ? "bg" : ""
      }
    },
  }

</script>

<style lang="scss" scoped>
.bg{
    background: aliceblue;
    }
</style>
