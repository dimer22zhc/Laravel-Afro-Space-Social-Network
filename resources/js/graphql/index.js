import gql from 'graphql-tag'
export const USER_PROFILE_QUERY = gql`
    query me($id: ID!) {
      me(id: $id) {
          bio
          dob
          personalInfo{
            address
          }
          user{
            created_at
        }
      }
    }`
export const UPDATE_PROFILE_MUTATION = gql`
    mutation updateProfileInfo($id:ID!, $show: String, $address:String, $phone_number:String, $nationality:String,$sex:String,$marital_status:String){
      updateProfileInfo(id: $id, show: $show,address:$address,phone_number:$phone_number,nationality:$nationality,sex:$sex,marital_status:$marital_status){
          address
          profile{
            bio
            user{
              created_at
            }
          }
      }
    }`
