import f from"./Layout-af4aac6d.js";import{_ as p}from"./DefaultThema.vue_vue_type_script_setup_true_lang-b29c9f65.js";import{_ as v}from"./Sub.vue_vue_type_script_setup_true_lang-4c37d4f6.js";import{_ as a}from"./DefaultThema.vue_vue_type_script_setup_true_lang-95e4a13c.js";import{r as n,T as x,c as V,w as y,o as g,a as e,b as o,u as b}from"./app-2493263c.js";import"./Header-c5bf6a9b.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./DefaultThema-30c9fd37.js";const j={class:""},k=e("div",{class:"mt-10 flex items-center justify-center text-3xl font-bold"},[e("p",null,"ブログ新規作成")],-1),w={class:"flex items-center justify-center mt-20"},h={class:"w-2/3"},C=e("div",null,"ブログのタイトル",-1),R=e("div",{class:"mt-5"},"metaタグのtitle",-1),U=e("div",{class:"mt-5"},"meta_description",-1),$=e("div",{class:"mt-5"},"タグ",-1),B={class:"flex justify-evenly"},F={name:"Create",props:{errors:Object},setup(u){const i=n(""),m=n(""),r=n(""),c=n(""),l=x({content:null,meta_title:null,meta_description:null,tags:null}),d=()=>{l.content=i.value,l.meta_title=m.value,l.meta_description=r.value,l.tags=c.value,l.post(route("admin.blog.store"))},_=()=>{window.history.back()};return(L,t)=>(g(),V(f,null,{default:y(()=>[e("div",j,[k,e("div",w,[e("div",h,[C,o(a,{modelValue:i.value,"onUpdate:modelValue":t[0]||(t[0]=s=>i.value=s),type:"text",name:"content",error:u.errors.content,class:"mt-2"},null,8,["modelValue","error"]),R,o(a,{modelValue:m.value,"onUpdate:modelValue":t[1]||(t[1]=s=>m.value=s),type:"text",name:"meta_title",class:"mt-2"},null,8,["modelValue"]),U,o(a,{modelValue:r.value,"onUpdate:modelValue":t[2]||(t[2]=s=>r.value=s),type:"text",name:"meta_description",class:"mt-2"},null,8,["modelValue"]),$,o(a,{modelValue:c.value,"onUpdate:modelValue":t[3]||(t[3]=s=>c.value=s),type:"text",name:"tags",class:"mt-2"},null,8,["modelValue"]),e("div",B,[o(v,{class:"my-2 mt-10 flex items-center justify-center",msg:"戻る",onClick:_}),o(p,{class:"my-2 mt-10 flex items-center justify-center",msg:"作成する",isLoading:b(l).processing,onClick:d},null,8,["isLoading"])])])])])]),_:1}))}};export{F as default};