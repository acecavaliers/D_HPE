import axios from 'axios';
export default async function getThemeColorSelected(){
    
    //let datalist = [];

    let responseData = [] ;
    

     try{
        let response = await axios.get(route('getThemeColorSelected'))
  
        responseData = response.data


     }catch(error){
        console.log(error);
        responseData = error
        
     };

     return{
        responseData
       
     }
 }