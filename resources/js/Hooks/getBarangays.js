import axios from 'axios';
import { ref } from 'vue';
export default async function getCities(cityid) {
    let responseData = ref([]);


    try{

        let response = await axios.get(route('barangays.getactivelist'), {
            params: {
                cityID: cityid
            }
        });

        responseData = response.data
       
    }catch(error){
        console.log(error);
        responseData = error
        
     };

     return{
        responseData
       
     }
 

  
}