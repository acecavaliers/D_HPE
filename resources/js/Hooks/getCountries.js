import axios from 'axios';
export default async function getCountries() {
    let responseData = [] ;

    try{
        let response = await axios.get(route('countries.getactivelist'));
  
        responseData = response.data
    }catch(error){
        console.log(error);
        responseData = error
        
     };

     return{
        responseData
       
     }
 

  
}