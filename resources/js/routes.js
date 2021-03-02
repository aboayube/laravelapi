import HomeComponent from './components/HomeComponent';
import loginComponent from './components/loginComponent';
import dashboardComponent from './components/dashboardComponent';


export const routes =[
{path:"/",name:"index",component:HomeComponent},
{path:"/home",name:"home",component:HomeComponent},
{path:"/login",name:"login",component:loginComponent},
{path:"/dashboard",name:"dashboard",component:dashboardComponent,
meta:{
    //يعني ما يدخل غير ليs
    requiresAuth:true}
},
];