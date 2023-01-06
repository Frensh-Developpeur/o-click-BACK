@include('header')

<div class='container mx-auto'>
    <h1
        class='
        bg-clip-text text-transparent bg-gradient-to-r from-teal-500 via-purple-500 to-orange-500 text-8xl text-center text-slate-400 font-extralight font-sans py-10
        '
    >
        Back O'ffice
    </h1>
    <h2 class="font-bold text-center py-8 text-4xl">
        Modification de la save
    </h2>
    <form
        method="POST"
        action="/office/saves/update/{{$save->id}}"
        class="max-w-[700px] mx-auto"
    >

    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="mb-5">
        <label
            for="id"
            class="mb-3 block text-base font-medium text-[#07074D]"
        >
        Id de la save
        </label>
        <input
            type="text"
            name="id"
            id="id"
            value={{$save->id}}
            placeholder="Id"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
            for="user_id"
            class="mb-3 block text-base font-medium text-[#07074D]"
        >
          User_id
        </label>
        <textarea
            type="text"
            name="user_id"
            id="user_id"
            placeholder="Id utilisateur"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        >{{$save->user_id}}</textarea>
      </div>
      <div class="mb-5">
        <label
            for="monsters_id"
            class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Monster_id
        </label>
        <input
            value={{$save->monsters_id}}
            type="number"
            name="monsters_id"
            id="monsters_id"
            placeholder="Id du monstre"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
            for="monster_life"
            class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Monster_life
        </label>
        <input
            value={{$save->monsters_life}}
            type="number"
            name="monsters_life"
            id="monsters_life"
            placeholder="Points de vie"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
            for="current_theme"
            class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Thème Actuel
        </label>
        <input
            value={{$save->current_theme}}
            type="number"
            name="current_theme"
            id="current_theme"
            placeholder="Thème"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
            for="toko"
            class="mb-3 block text-base font-medium text-[#07074D]"
        >
          O'zeille
        </label>
        <input
            value={{$save->token}}
            type="number"
            name="token"
            id="token"
            placeholder="O'zeille"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="flex justify-end gap-4">
        <button
            type="submit"
            class="font-bold py-3 px-3 border border-transparent text-sm rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        >
          Valider
        </button>
        <a
            href="/office/saves"
            class="font-bold py-3 px-3 border border-transparent text-sm rounded-md text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-400"
        >
          Annuler
        </a>
      </div>
  </form>
</div>
@include('footer')
