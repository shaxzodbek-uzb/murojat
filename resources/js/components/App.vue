<template>
  <!-- component -->
  <div
    class="
      flex
      justify-center
      min-h-screen
      items-center
      bg-gray-200
      antialiased
    "
  >
    <div
      class="
        flex flex-col
        w-full
        sm:w-5/6
        lg:w-1/2
        max-w-2xl
        mx-auto
        rounded-lg
        border border-gray-300
        shadow-xl
      "
    >
      <div
        class="
          flex flex-row
          justify-between
          p-6
          bg-white
          border-b border-gray-200
          rounded-tl-lg rounded-tr-lg
        "
      >
        <p class="font-semibold text-gray-800">Murojatingizni kiriting</p>
        <a href="#" class="underline">Murojat holatini ko'rish</a>
      </div>

      <div class="flex flex-col px-6 py-5 bg-gray-50">
        <p class="font-semibold text-gray-700">Murojat mavzusi</p>
        <select
          v-model="appeal.category_id"
          type="text"
          class="
            w-full
            p-5
            bg-white
            border border-gray-200
            rounded
            shadow-sm
            appearance-none
          "
        >
          <option value="1" v-for="item in categories" :key="item.id">
            {{ item.name }}
          </option>
        </select>
        <div class="flex flex-col sm:flex-row items-center mb-5 sm:space-x-5">
          <div class="w-full">
            <p class="font-semibold text-gray-700">Ismingiz(ixtiyoriy)</p>
            <input
              v-model="appeal.fullname"
              class="
                w-full
                p-5
                mb-5
                bg-white
                border border-gray-200
                rounded
                shadow-sm
              "
            />
          </div>
          <div class="w-full">
            <p class="mb-2 font-semibold text-gray-700">
              Aloqa uchun telefon raqam(ixtiyoriy)
            </p>
            <input
              v-model="appeal.phone"
              class="
                w-full
                p-5
                mb-5
                bg-white
                border border-gray-200
                rounded
                shadow-sm
              "
            />
          </div>
        </div>
        <p class="mb-2 font-semibold text-gray-700">Manzil(ixtiyoriy)</p>
        <input
          v-model="appeal.address"
          class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm"
        />
        <p class="mb-2 font-semibold text-gray-700">Murojat matnini kiriting</p>

        <textarea
          v-model="appeal.description"
          type="text"
          placeholder="Murojat matni..."
          class="
            p-5
            mb-5
            bg-white
            border border-gray-200
            rounded
            shadow-sm
            h-36
          "
        ></textarea>

        <p class="mb-2 font-semibold text-gray-700">
          Murojat yuzasidan rasm, video yoki fayl(ixtiyoriy)
        </p>
        <input
          type="file"
          class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm"
        />
        <hr />
      </div>
      <div
        class="
          flex flex-row
          items-center
          justify-between
          p-5
          bg-white
          border-t border-gray-200
          rounded-bl-lg rounded-br-lg
        "
      >
        <button
          class="px-4 py-2 text-white font-semibold bg-blue-500 rounded"
          @click="storeAppeal"
          :disabled="this.loading"
        >
          Yuborish
        </button>
      </div>
    </div>
  </div>
</template>

<script>
// 'title' => 'required|max:255',
// 'description' => 'required|max:255',
// 'address' => 'required|max:255',
// 'phone' => 'sometimes|max:255',
// 'file' => 'sometimes|file|max:10240'
export default {
  data() {
    return {
      loading: true,
      categories: [],
      appeal: {
        fullname: "",
        description: "",
        address: "",
        phone: "",
        file: "",
      },
    };
  },
  mounted() {
    console.log("Component mounted.");
    this.loadCategories();
  },
  methods: {
    storeAppeal() {
      this.loading = true;
      this.$http
        .post("/api/appeals", this.appeal)
        .then(({ data }) => {
          this.$alert(
            "Murojatingiz muvofaqqiyatli yuborildi!",
            "Muvofaqqiyat",
            "success"
          );
        })
        .finally(() => (this.loading = false));
    },
    loadCategories() {
      this.$http.get("/api/categories").then(({ data }) => {
        this.categories = data.categories;
        this.appeal.category_id = data.categories[0].id;
        this.loading = false;
      });
    },
  },
};
</script>
