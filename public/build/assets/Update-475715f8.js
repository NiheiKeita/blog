import f from"./Layout-6604a9e5.js";import{_ as v}from"./DefaultThema.vue_vue_type_script_setup_true_lang-5ceaea9b.js";import{_ as g}from"./Sub.vue_vue_type_script_setup_true_lang-70678ad7.js";import{_ as n}from"./DefaultThema.vue_vue_type_script_setup_true_lang-260fe28b.js";import{r as i,T as b,c as x,w as V,o as y,a as t,b as o,u as j}from"./app-b278ce3c.js";import"./Header-96318fe6.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./DefaultThema-3248fff1.js";const k={class:""},w=t("div",{class:"mt-10 flex items-center justify-center text-3xl font-bold"},[t("p",null,"ブログ内容編集")],-1),U={class:"flex items-center justify-center mt-20"},h={class:"w-2/3"},R=t("div",null,"ブログのタイトル",-1),$=t("div",{class:"mt-5"},"metaタグのtitle",-1),B=t("div",{class:"mt-5"},"meta_description",-1),C=t("div",{class:"mt-5"},"タグ",-1),O={class:"flex justify-evenly"},G={name:"Update",props:{errors:Object,blog:Object,tags:Object},setup(d){const a=d,m=i(a.blog.content),c=i(a.blog.meta_title),r=i(a.blog.meta_description),u=i(a.tags),l=b({content:null,meta_title:null,meta_description:null,tags:null}),_=()=>{l.content=m.value,l.meta_title=c.value,l.meta_description=r.value,l.tags=u.value,l.put(route("admin.blog.update",a.blog.id))},p=()=>{window.history.back()};return(L,e)=>(y(),x(f,null,{default:V(()=>[t("div",k,[w,t("div",U,[t("div",h,[R,o(n,{modelValue:m.value,"onUpdate:modelValue":e[0]||(e[0]=s=>m.value=s),type:"text",name:"content",error:d.errors.content,class:"mt-2"},null,8,["modelValue","error"]),$,o(n,{modelValue:c.value,"onUpdate:modelValue":e[1]||(e[1]=s=>c.value=s),type:"text",name:"meta_title",class:"mt-2"},null,8,["modelValue"]),B,o(n,{modelValue:r.value,"onUpdate:modelValue":e[2]||(e[2]=s=>r.value=s),type:"text",name:"meta_description",class:"mt-2"},null,8,["modelValue"]),C,o(n,{modelValue:u.value,"onUpdate:modelValue":e[3]||(e[3]=s=>u.value=s),type:"text",name:"tags",class:"mt-2"},null,8,["modelValue"]),t("div",O,[o(g,{class:"my-2 mt-10 flex items-center justify-center",msg:"戻る",onClick:p}),o(v,{class:"my-2 mt-10 flex items-center justify-center",msg:"更新する",onClick:_,isLoading:j(l).processing},null,8,["isLoading"])])])])])]),_:1}))}};export{G as default};
