import{r as c,m as d,d as t,l as i,F as u,e as h,o as s,a as o,t as _}from"./app-b278ce3c.js";const f={class:"w-full h-full p-8 shadow-md rounded-md text-gray-900 bg-Linen"},g={key:0,class:"text-xl font-bold mb-2"},m={class:"flex justify-start"},v=o("div",null,"・",-1),x=["href"],y={key:1,class:"text-xl font-bold mb-2 mt-10"},b={class:"flex justify-start"},p=o("div",null,"・",-1),k=["href"],j={name:"RightSideMenu",setup(w){const a=c(),n=c();return d.get("/api/tags/").then(e=>{console.log(e),a.value=e.data}).catch(e=>{console.log(e)}).finally(()=>{}),d.get("/api/blogs/").then(e=>{console.log(e),n.value=e.data}).catch(e=>{console.log(e)}).finally(()=>{}),(e,B)=>(s(),t("div",f,[n.value?(s(),t("h2",g,"記事")):i("",!0),(s(!0),t(u,null,h(n.value,(l,r)=>(s(),t("div",{key:r},[o("div",m,[v,o("a",{href:e.route("blog.show",l.id),class:"text-blue-500 hover:underline"},_(l.content),9,x)])]))),128)),a.value?(s(),t("h2",y,"タグ")):i("",!0),(s(!0),t(u,null,h(a.value,(l,r)=>(s(),t("div",{key:r},[o("div",b,[p,o("a",{href:e.route("tag.show",l.id),class:"text-blue-500 hover:underline"},_(l.name),9,k)])]))),128))]))}};export{j as default};
