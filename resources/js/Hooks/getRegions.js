import axios from 'axios';
import { ref } from 'vue';
export default async function getRegions(countryid) {
    let responseData = ref([]);


    try{

        let response = await axios.get(route('regions.getactivelist'), {
            params: {
                countryID: countryid
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