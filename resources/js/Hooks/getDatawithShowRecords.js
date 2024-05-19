
import axios from 'axios';

export default async function getDatawithShowRecords(routeurl, showrecordsvalue){

   let responseData = [] ;
   try{
      let response = await axios.get(routeurl, { params: {
         showrecords: showrecordsvalue,
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

