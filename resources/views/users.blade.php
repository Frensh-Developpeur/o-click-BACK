@include('header')

<div class='container mx-auto'>
    <h1 class='bg-clip-text text-transparent bg-gradient-to-r from-teal-500 via-purple-500 to-orange-500 text-8xl text-center text-slate-400 font-extralight font-sans py-10'>
        Back O'ffice
    </h1>
    <h2 class="font-bold text-center py-8 text-4xl">
        Liste des utilisateurs
    </h2>
    <div class="flex gap-2 mb-2">
        <a
            href="{{ url('/office/home') }}"
            class='py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
        >
            Home
        </a>
        <a
            href="{{ url('/office/spells') }}"
            class='py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
        >
            Spells
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
    <div class='mx-auto text-center'>
        <div class="border">
            <div class='flex items-center px-4 bg-slate-300 py-4 border'>
                <div class="flex justify-between w-full">
                <p class="font-bold text-left w-[25%]">
                        ID
                    </p>
                    <p class="font-bold text-left w-[25%]">
                        Pseudo
                    </p>
                    <p class="font-bold w-[25%]">
                        Adresse Mail
                    </p>
                    <p class="font-bold w-[25%]">
                        Rang
                    </p>
                </div>
                <div class='w-[10rem]'></div>
            </div>

            @foreach($users as $user)
            <div class="border">
                <li class='flex justify-between items-center mt-1 list-none p-4'>
                    <div class="flex justify-between w-full">
                    <p class="capitalize w-[25%] text-left">
                            {{ $user->id }}
                        </p>
                        <p class="capitalize w-[25%] text-left">
                            {{ $user->name }}
                        </p>
                        <p class="w-[25%]">
                            {{ $user->email }}
                        </p>
                        <p class="w-[25%]">
                            {{ $user->rank }}
                        </p>
                    </div>
                    <div class='flex gap-2 w-[10rem] justify-end'>
                        <a
                            href={{ url('/office/usersUpdate/') . '/' . $user->id}}
                            class='py-2 px-3 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-indigo-600 to-red-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
                            type='button'
                        >
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a
                            href={{ url('/office/users/delete/') . '/' . $user->id}}
                            class='py-2 px-3 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500'
                        >
                            <i class="fa-solid fa-trash-can"></i>
                        </a>

                    </div>
                </li>
            </div>
            @endforeach

    </div>
</div>

@include('footer')
