@include('header')
<div class='container mx-auto'>
    <h1 class='bg-clip-text text-transparent bg-gradient-to-r from-teal-500 via-purple-500 to-orange-500 text-8xl text-center text-slate-400 font-extralight font-sans py-10'>
        Back O'ffice
    </h1>
    <div class='w-full grid grid-cols-2 gap-4 text-center'>
        <div class="border">
            <h2 class='bg-slate-300 py-4 border font-bold'>
                5 Derniers utilisateurs
            </h2>
            @foreach($users as $user)
            <div class="border">
                <li class='flex justify-between items-center mt-1 list-none p-4 capitalize'>
                    {{ $user->name }}
                    <div>
                        <a
                            href={{ url('/office/users/delete/') . '/' . $user->id}}
                            class='py-2 px-3 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500'
                            type='button'>
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </div>
                </li>
            </div>
            @endforeach
            <a class="block border py-2 hover:bg-slate-300" href="{{ url('/office/users') }}">
                Voir plus... &nbsp;
                <i class="fa-sharp fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="border">
            <h2 class='bg-slate-300 py-4 border font-bold'>
                5 Derniers Spells
            </h2>
            @foreach($spells as $spell)
            <div class="border">
                <li class='flex justify-between items-center mt-1 list-none p-4 capitalize'>
                    {{ $spell->name }}
                    <div class='flex gap-2'>
                        <a  href={{ url('/office/spellsUpdate/') . '/' . $spell->id}} class='py-2 px-3 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500' type='button'><i class="fa-regular fa-pen-to-square"></i>
                        </a>
                    </div>
                </li>
            </div>
            @endforeach
            <a class="block border py-2 hover:bg-slate-300" href="{{ url('/office/spells') }}">
                Voir plus... &nbsp;
                <i class="fa-sharp fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="border">
            <h2 class='bg-slate-300 py-4 border font-bold'>
                5 Dernières themes
            </h2>
            @foreach($themes as $theme)
            <div class="border">
                <li class='flex justify-between items-center mt-1 list-none p-4 capitalize'>
                    {{ $theme->name }}
                    <div class='flex gap-2'>
                        <a
                            href={{ url('/office/themesUpdate/') . '/' . $theme->id}}
                            class='py-2 px-3 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
                            type='button'
                        >
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                    </div>
                </li>
            </div>
            @endforeach
            <a class="block border py-2 hover:bg-slate-300" href="{{ url('/office/themes') }}">
                Voir plus... &nbsp;
                <i class="fa-sharp fa-solid fa-arrow-right"></i>
            </a>
        </div>

            <div class="border">
                <h2 class='bg-slate-300 py-4 border font-bold'>
                    5 Derniers monstres
                </h2>
                @foreach($monsters as $monster)
                <div class="border">
                    <li class='flex justify-between items-center mt-1 list-none p-4 capitalize'>
                        {{ $monster->name }}
                        <div class='flex gap-2'>
                            <a
                                href={{ url('/office/monstersUpdate/') . '/' . $monster->id}}
                                class='py-2 px-3 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
                                type='button'
                            >
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </div>
                    </li>
                </div>
                @endforeach
                <a class="block border py-2 hover:bg-slate-300" href="{{ url('/office/monsters') }}">
                    Voir plus... &nbsp;
                    <i class="fa-sharp fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="border">
                <h2 class='bg-slate-300 py-4 border font-bold'>
                    5 Dernieres Save
                </h2>
                @foreach($saves as $save)
                <div class="border">
                    <li class='flex justify-between items-center mt-1 list-none p-4 capitalize'>
                        {{ $save->id }}
                        <div class='flex gap-2'>
                            <a
                                href={{ url('/office/saveUpdate/') . '/' . $save->id}}
                                class='py-2 px-3 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
                                type='button'
                            >
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </div>
                    </li>
                </div>
                @endforeach
                <a class="block border py-2 hover:bg-slate-300" href="{{ url('/office/saves') }}">
                    Voir plus... &nbsp;
                    <i class="fa-sharp fa-solid fa-arrow-right"></i>
                </a>
            </div>           
        </div>
    </div>

</div>
@include('footer')
