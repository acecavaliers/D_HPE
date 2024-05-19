import axios from 'axios';
import { ref } from 'vue';
export default async function getCities(provinceid) {
    let responseData = ref([]);


    try{

        let response = await axios.get(route('cities.getactivelist'), {
            params: {
                provinceID: provinceid
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