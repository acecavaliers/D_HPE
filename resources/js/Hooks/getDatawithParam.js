
import axios from 'axios';

export default async function getDatawithParams(routeurl, showrecordsvalue, appendParam){

   let responseData = [] ;
   try{
      let response = await axios.get(routeurl, { params: {
         showrecords: showrecordsvalue,
         extendParam: appendParam
      }})

      responseData = response.data
   
   }catch(error){
      console.log(error);
      responseData = error
      
   };

    
    
 /*    await axios.get(routeurl, { params: {
        showrecords: showrecordsvalue
     } }).then(response => {
        datalist = response.data
     }); */




     //datalist = response.data

     return { responseData }

 }

