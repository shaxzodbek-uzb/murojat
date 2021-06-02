<template>
  <!-- component -->
  <div
    class="flex justify-center h-screen items-center bg-gray-200 antialiased"
  >
    <div
      class="flex flex-col w-full sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl"
    >
      <div
        class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg"
      >
        <p class="font-semibold text-gray-800">Murojatingizni kiriting</p>
        <svg
          class="w-6 h-6"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M6 18L18 6M6 6l12 12"
          ></path>
        </svg>
      </div>

      <div class="flex flex-col px-6 py-5 bg-gray-50">
        <p class="mb-2 font-semibold text-gray-700">Murojat mavzusi</p>
        <select
          type="text"
          name=""
          class="w-full p-5 bg-white border border-gray-200 rounded shadow-sm appearance-none"
          id=""
        >
          <option value="0">Gaz taminoti</option>
        </select>
        <div class="flex flex-col sm:flex-row items-center mb-5 sm:space-x-5">
          <div class="w-full">
            <p class="mb-2 font-semibold text-gray-700">Ismingiz(ixtiyoriy)</p>
            <input
              class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm"
            />
          </div>
          <div class="">
            <p class="mb-2 font-semibold text-gray-700">
              Aloqa uchun telefon raqam(ixtiyoriy)
            </p>
          </div>
        </div>
        <input
          class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm"
        />
        <p class="mb-2 font-semibold text-gray-700">Manzil(ixtiyoriy)</p>
        <input
          class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm"
        />
        <p class="mb-2 font-semibold text-gray-700">Murojat matnini kiriting</p>

        <textarea
          type="text"
          name=""
          placeholder="Murojat matni..."
          class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-36"
          id=""
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
        class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg"
      >
        <button class="px-4 py-2 text-white font-semibold bg-blue-500 rounded">
          Yuborish
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
