import c from"./Layout-af4aac6d.js";import{_ as l}from"./Transition.vue_vue_type_script_setup_true_lang-4cfd4465.js";import{c as f,w as a,o as r,a as e,b as n,d,e as p,t as _,u as b,i as g,F as h}from"./app-2493263c.js";import"./Header-c5bf6a9b.js";import"./_plugin-vue_export-helper-c27b6911.js";const x={class:""},k=e("div",{class:"mt-10 flex items-center justify-center text-3xl font-bold"},[e("p",null,"ブログリスト")],-1),v={class:"mt-3 flex items-center justify-end"},w={class:"mt-10"},y={class:"text-blue-500 hover:underline"},O={name:"Index",props:{errors:Object,blogs:Object},setup(u){const i=()=>{route("admin.blog.index")};return(o,t)=>(r(),f(c,null,{default:a(()=>[e("div",x,[k,e("div",v,[n(l,{class:"my-2 mt-10",msg:"新規作成",route:o.route("admin.blog.create"),onClick:t[0]||(t[0]=s=>i())},null,8,["route"])]),e("ul",w,[(r(!0),d(h,null,p(u.blogs,(s,m)=>(r(),d("li",{key:m,class:"rounded shadow-md border-b p-4 m-2 bg-white"},[n(b(g),{href:o.route("admin.blog.show",s.id),class:"flex justify-between"},{default:a(()=>[e("p",y,_(s.content),1),n(l,{msg:"編集",route:o.route("admin.blog.edit",s.id),onClick:t[1]||(t[1]=j=>i())},null,8,["route"])]),_:2},1032,["href"])]))),128))])])]),_:1}))}};export{O as default};