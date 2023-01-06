@include('header')
<div class='container mx-auto'>
    <h1 class='bg-clip-text text-transparent bg-gradient-to-r from-teal-500 via-purple-500 to-orange-500 text-8xl text-center text-slate-400 font-extralight font-sans py-10'>
        Back O'ffice
    </h1>
    <h2 class="font-bold text-center py-8 text-4xl">
        Modification d'un monstre
    </h2>
    <form
        method="POST"
        class="max-w-[700px] mx-auto"
        action="/office/monsters/update/{{$monster->id}}"
    >
        {{csrf_field()}}
        {{method_field('PUT')}}

        <div class="mb-5">
            <label
                for="name"
                class="mb-3 block text-base font-medium text-[#07074D]"
            >
                Nom du monstre
            </label>
            <input
                value={{$monster->name}}
                type="text"
                name="name"
                id="name"
                placeholder="Nom du monstre"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
        </div>

        <div class="mb-5">
            <label
                for="life"
                class="mb-3 block text-base font-medium text-[#07074D]"
            >
                Vie du monstre
            </label>
            <input
                value={{$monster->life}}
                type="number"
                name="life"
                id="life"
                placeholder="Vie"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
        </div>
        <div class="mb-5">
            <label
                for="status"
                class="mb-3 block text-base font-medium text-[#07074D]"
            >
                Statut
            </label>
            <select
                type="text"
                name="status"
                id="status"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            >
                <option value="active">active</option>
                <option value="desactive">desactive</option>
            </select>
        </div>
        <div class="flex justify-end gap-4">
            <button
                type="submit"
                class="font-bold py-3 px-3 border border-transparent text-sm rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
                    Valider
            </button>
                <a
                href="/office/monsters"
                class="font-bold py-3 px-3 border border-transparent text-sm rounded-md text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-400"
                >
                    Annuler
                </a>
            </div>
        </div>
    </form>
</div>
@include('footer')
