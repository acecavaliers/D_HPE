
import axios from 'axios';
export default async function getDatawithColumns(routeurl, model_name){
    
    //let datalist = [];
    let defaultfilteredcolumns = [];
    let filtercol = [];
    let responseData = [] ;
  

     try{
        let response = await axios.get(routeurl, { params: {
            modelName: model_name
         }})
  
        responseData = response.data

        responseData.forEach((val)=>{
            if(val.enable_display_column == 1){
                filtercol.push(val)
            }
        })

        defaultfilteredcolumns = filtercol;
    
     
     }catch(error){
        console.log(error);
        responseData = error
        
     };

     return{
        responseData,defaultfilteredcolumns
       
     }
 }