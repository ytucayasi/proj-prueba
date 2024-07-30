<nav
    class="max-w-7xl mx-auto flex justify-between items-center py-4 px-4 text-slate-500 dark:text-dark-text-primary h-fit">

    <!-- Rigth Menu -->
    <div class="flex space-x-2 items-center h-fit">

        <!-- Brand -->
        <div class="rounded-full w-8 h-8 flex items-center justify-center">
            <span class="dark:text-white select-none">yt</span>
        </div>

        <!-- Manu Bar -->
        <ul class="flex space-x-2 items-center h-fit">
            <li class="flex">
                <a class="hover:text-slate-800 dark:hover:bg-dark-hover-btn-primary dark:hover:text-dark-hover-text-primary p-2 rounded-md"
                    href="">Inicio</a>
            </li>
            <li class="flex">
                <a class="hover:text-slate-800 dark:hover:bg-dark-hover-btn-primary dark:hover:text-dark-hover-text-primary p-2 rounded-md"
                    href="">Contacto</a>
            </li>
        </ul>
    </div>

    <!-- Left Menu -->
    <div class="flex items-center space-x-2">

        <!-- Actions -->
        <div class="flex items-center">
            <button class="p-2 rounded-md">
                <x-icon name="sun" class="w-5 h-5" solid mini x-show="!darkMode" @click="toggleTheme()" />
                <x-icon name="moon" class="w-5 h-5" solid mini x-show="darkMode" @click="toggleTheme()" />
            </button>
        </div>

        <!-- Dropdown -->
        <x-dropdown position="bottom-end" class="fit">
            <x-slot name="trigger">
                <div
                    class="flex items-center space-x-1 h-fit select-none hover:text-slate-800 dark:hover:text-dark-hover-text-primary">
                    <span class="">Saul Ytucayasi</span>
                    <div class="flex items-center">
                        <template x-if="!positionable.state">
                            <x-icon name="chevron-down" solid mini />
                        </template>
                        <template x-if="positionable.state">
                            <x-icon name="chevron-up" solid mini />
                        </template>
                    </div>
                </div>
            </x-slot>
            <x-dropdown.header label="Settings">
                <x-dropdown.item icon="cog" label="Preferences" class="dark:hover:text-dark-hover-text-primary" />
                <x-dropdown.item icon="user" label="My Profile" class="dark:hover:text-dark-hover-text-primary" />
            </x-dropdown.header>
            <x-dropdown.item separator label="Help Center" class="dark:hover:text-dark-hover-text-primary" />
            <x-dropdown.item label="Live Chat" class="dark:hover:text-dark-hover-text-primary" />
            <x-dropdown.item label="Logout" class="dark:hover:text-dark-hover-text-primary" />
        </x-dropdown>
    </div>
</nav>