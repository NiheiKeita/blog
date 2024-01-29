<script setup lang="ts">
import axios from "axios";
import { ref } from "vue";

const props = defineProps({
    blogId: {
        type: Number,
        default: 0,
    },
});
const comment = ref("");
const email = ref("");
const name = ref("");

const isPennding = ref(false);
const clickEvent = () => {
    //TODO:alertじゃなく、POPUPを作成する
    if (isPennding.value) {
        return;
    }
    const reg = new RegExp(
        /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/
    );
    if (comment.value == "") {
        alert("コメントを入力してください。");
        return;
    }
    if (name.value == "") {
        alert("名前を入力してください。");
        return;
    }
    if (!reg.test(email.value) && email.value != "") {
        alert("メールアドレスを正しく入力してください。");
        return;
    }
    isPennding.value = true;
    axios
        .post(
            "/api/comments",
            {
                comment: comment.value,
                email: email.value,
                name: name.value,
                blog_id: props.blogId,
            },
            {
                headers: {
                    "Content-Type": "application/json",
                },
            }
        )
        .then((response) => {
            alert("コメントを送信しました。");
            comment.value = "";
            name.value = "";
            isPennding.value = false;
        })
        .catch((error) => {
            alert(
                "コメントを送信できませんでした。入力内容を確認してください。"
            );
            isPennding.value = false;
        });
};
</script>

<template>
    <div class="bg-gray-100 py-5 flex items-center justify-center">
        <div class="max-w-2xl w-full p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl mb-4">コメント投稿</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2"
                    >お名前:</label
                >
                <input
                    type="text"
                    name="name"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="お名前を入力してください"
                    required
                    v-model="name"
                />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2"
                    >返信用メールアドレス（任意）:</label
                >
                <input
                    type="email"
                    name="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="返信用メールアドレスを入力してください"
                    v-model="email"
                />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2"
                    >コメント内容:</label
                >
                <textarea
                    name="comment"
                    rows="4"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="コメントを入力してください"
                    required
                    v-model="comment"
                ></textarea>
            </div>
            <button
                @click="clickEvent"
                v-if="!isPennding"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800"
            >
                投稿する
            </button>
            <div
                className="flex justify-center mt-1"
                aria-label="読み込み中"
                v-if="isPennding"
            >
                <div
                    className="my-1 animate-spin h-8 w-8 border-4 border-blue-600 rounded-full border-t-transparent"
                ></div>
            </div>
        </div>
    </div>
</template>
