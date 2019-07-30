import gql from 'graphql-tag'
export const USER_PROFILE_QUERY = gql`
    query personalInfo($id: ID!) {
      personalInfo(id: $id) {
         id
         bio
         dob
         address
         phone_number
         nationality
         marital_status
         sex
         show
         profile{
              user{
                created_at
            }
         }

      }
    }`
export const UPDATE_PERSONAL_INFO_MUTATION = gql`
    mutation updatePersonalInfo($id:ID!,$bio:String , $dob:String, $show: String, $address:String, $phone_number:String, $nationality:String,$sex:String,$marital_status:String){
      updatePersonalInfo(id: $id, bio:$bio, dob:$dob, show: $show, address:$address,phone_number:$phone_number,nationality:$nationality,sex:$sex,marital_status:$marital_status){
          id
          bio
          dob
          address
          phone_number
          nationality
          marital_status
          sex
          show
          profile{
              user{
                created_at
            }
         }
        }
    }`
