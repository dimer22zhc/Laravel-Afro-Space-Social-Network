<template>
  <div>
    <div class="ui-block">
				<div class="ui-block-title p-2">
					<h6 class="title">Profile Intro</h6>
				</div>

        <div class="ui-block-content">

					<!-- W-Personal-Info -->
          <div v-if="this.$apollo.queries.personalInfo.loading" ><a-skeleton active :paragraph="{ rows: 4}" /></div>

          <!-- Error -->
          <div v-else-if="this.$apollo.error" class="error apollo">An error occurred</div>

          <!-- Result -->
					<ul v-else-if="this.$apollo.data.personalInfo" class="widget w-personal-info item-block">
						<li>
							<span class="title"><a-icon type="smile" theme="outlined" /> About Me:</span>

              <span >
                <span class="row">
                  <span class="col-10 ">
                    <span v-if=" personalInfo.bio === null" class="text">
                      <p class=" m-0">Add a bio to let pleople know you more </p>
                    </span>
                    <span class="text" else>{{ personalInfo.bio }}</span>
                  </span>
                  <span class="col-2 mt-1 p-0">
                    <a-popover trigger="click">
                      <template slot="content">
                        <p class="mb-1"><strong>Update your bio</strong></p>
                        <a-textarea v-model="form.bio" placeholder="Autosize height based on content lines" :autosize="{ minRows: 2, maxRows: 2 }" /><br/>
                        <a-tag color="rgb(9, 112, 160)"  @click="update">update</a-tag>
                        <a-tag color="rgb(90, 90, 93)" >cancel</a-tag>
                        <a-tag color="rgb(255, 255, 255)" class="m-0" style="float:right"><a-icon type="bars" style="font-size:14px; color:black" /></a-tag>
                      </template>
                      <span class="edit-info" ><a-icon  type="form" class=" hover" /></span>
                    </a-popover>
                  </span>
                </span>
              </span>
						</li>

						<li v-if="personalInfo.address !== null">
              <span class="row">
                <span class="col-10 ">
                  <span class="text"><a-icon type="home" /> Lives in {{personalInfo.address}}</span>
                </span>
                <span class="col-2 mt-1 p-0">
                    <a-popover trigger="click">
                      <template slot="content">
                        <p class="mb-1"><strong>Update your Address</strong></p>
                        <a-textarea v-model="form.address" placeholder="Autosize height based on content lines" :autosize="{ minRows: 2, maxRows: 2 }" /><br/>
                        <a-tag :disabled="form.bio === null" color="rgb(9, 112, 160)"  @click="update">update</a-tag>
                        <a-tag color="rgb(90, 90, 93)" >cancel</a-tag>
                        <a-tag color="rgb(255, 255, 255)" class="m-0" style="float:right"><a-icon type="bars" style="font-size:14px; color:black" /></a-tag>
                      </template>
                      <span class="edit-info" ><a-icon  type="form" class=" hover" /></span>
                    </a-popover>
                  </span>
              </span>
						</li>
            <li>
              <span class="text"><a-icon type="calendar" /> Joined in {{ personalInfo.profile.user.created_at }} </span>
            </li>
					</ul>
          <!-- No result -->
          <div v-else class="no-result apollo">No result :(</div>
					<!-- .. end W-Personal-Info -->
				</div>
			</div>
  </div>
</template>

<script>
  import Form from 'vform'
  import { USER_PROFILE_QUERY, UPDATE_PERSONAL_INFO_MUTATION } from '~/graphql/'
  export default {
    name:"ProfileIntroInfo",
    data() {
      return {
        id:this.$route.params.id,
        form: new Form({
          bio: null,
          address: null
        })

      }
    },
    apollo: {
        // fetch profile by ID

        personalInfo: {
            query: USER_PROFILE_QUERY,
            variables () {
                return {
                    id: this.id,
                }

            }
        }
    },

    methods: {
      update() {
            this.$apollo
                .mutate({
                    mutation: UPDATE_PERSONAL_INFO_MUTATION,
                    variables: {
                      id: this.id,
                      bio: this.form.bio !== null ? this.form.bio : this.personalInfo.bio,
                      address: this.form.address !== null ? this.form.address : this.personalInfo.address
                    },
                    update: (store, { data: { updatePersonalInfo } }) => {
                        // read data from cache for this query
                        console.log(this.id)

                        const data = store.readQuery({ query: USER_PROFILE_QUERY, variables:{ id:this.id } })

                        // add new profile from the mutation to existing profiles
                        data.personalInfo.push(updatePersonalInfo)


                        // write data back to the cache
                        store.writeQuery({ query: USER_PROFILE_QUERY, data })
                    }
                })

        }
    },
  }
</script>

<style lang="scss" scoped>
.edit-info:hover{
    padding: 7px;
    cursor: pointer;
    color:rosybrown;
    transition: all .15s ease-in-out;
    border-radius: 25%;
    background: #edf2f6;
}
textarea {
  margin-bottom:5px;
  width: 180px;
}
</style>
