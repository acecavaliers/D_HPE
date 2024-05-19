import axios from 'axios';
import { ref } from 'vue';
export default async function getProvinces(regionid) {
    let responseData = ref([]);


    try{

        let response = await axios.get(route('provinces.getactivelist'), {
            params: {
                regionID: regionid
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