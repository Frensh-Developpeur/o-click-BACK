@include('header')

<div class='container mx-auto'>
    <h1 class='bg-clip-text text-transparent bg-gradient-to-r from-teal-500 via-purple-500 to-orange-500 text-8xl text-center text-slate-400 font-extralight font-sans py-10'>
        Back O'ffice
    </h1>
    <h2 class="font-bold text-center py-8 text-4xl">
        Liste des spells
    </h2>
    <div class="flex justify-between items-center">
        <div class="flex justify-end gap-2 mb-2">
            <a
                href="{{ url('/office/home') }}"
                class='py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
            >
                Home
            </a>
            <a
                href="{{ url('/office/users') }}"
                class='py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
            >
                Utilisateurs
            </a>
            <a
                href="{{ url('/office/themes') }}"
                class='py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
            >
                Thèmes
            </a>
            <a
                href="{{ url('/office/monsters') }}"
                class='py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
            >
                Monstres
            </a>
            <a
                href="{{ url('/office/saves') }}"
                class='py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
            >
                Save
            </a>
        </div>
        <div class="mb-2">
            <a
                class='py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
                href="/office/spellsForm"
            >
                Ajouter un spell
            </a>
        </div>
    </div>
    <div class='mx-auto text-center'>
        <div class="border">
            <div class='flex items-center px-4 bg-slate-300 py-4 border'>
                <div class="flex justify-between w-full">
                <p class="font-bold text-left w-[25%]">
                        ID
                    </p>
                    <p class="font-bold text-left w-[25%]">
                        Nom du spell
                    </p>
                    <p class="font-bold w-[25%]">
                        Description
                    </p>
                    <p class="font-bold w-[25%]">
                        Statut
                    </p>
                    <p class="font-bold w-[25%]">
                        Prix
                    </p>
                </div>
                <div class='w-[10rem]'></div>
            </div>

            @foreach($spells as $spell)
                <div class="border">
                    <li class='flex justify-between items-center mt-1 list-none p-4'>
                        <div class="flex justify-between w-full">
                        <p class="capitalize w-[25%] text-left">
                            {{ $spell->id }}
                            </p>
                            <p class="capitalize w-[25%] text-left">
                            {{ $spell->name }}
                            </p>
                            <p class="w-[25%]">
                                {{ $spell->description }}
                            </p>
                            <p class="w-[25%]">
                                {{ $spell->status }}
                            </p>
                            <p class="w-[25%]">
                                {{ $spell->price }}
                            </p>
                        </div>

                        <div class='flex gap-2 w-[10rem] justify-end'>
                            <a
                                href={{ url('/office/spellsUpdate/') . '/' . $spell->id}}
                                class='py-2 px-3 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-indigo-600 to-red-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
                                type='button'
                            >
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </div>

                    </li>
                </div>
            @endforeach

    </div>
</div>

@include('footer')
