
import axios from 'axios';
export default function getData(routeurl){

    let datalist = [];

    
    axios.get(routeurl).then(response => {
        datalist = response.data
   
    });

    return{
        datalist
    }
   
}




