<section class="mt-10">
    <h1 class="font-bold text-4xl mb-16">
        Liste des projets
    </h1>

    <section class=" w-full grid mt-10 mb-5">
        <h1 class="hidden">transactions</h1>
        <table class="border-separate border-spacing-y-5">
            <thead>
            <tr class="text-left font-bold">
                <th class="pr-32 pl-10">Nom</th>
                <th class="pr-40">Statut</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projets as $projet)
                <tr class="relative mb-32 h-20 shadow-lg rounded-xl">
                    <td class="bg-[#DADADA] rounded-l-xl pl-10">
                        {{ $projet->name }}
                    </td>
                    <td class="bg-[#DADADA]">
                        {{ $projet->statut }}
                    </td>
                    <td class="bg-[#DADADA] rounded-r-xl">
                        <div class="flex gap-3">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.5521 2.66699C24.2108 2.66699 23.8694 2.79762 23.6094 3.05762L20.9427 5.72428L19.0573 7.6097L4 22.667V28.0003H9.33333L28.9427 8.39095C29.464 7.86962 29.464 7.02553 28.9427 6.50553L25.4948 3.05762C25.2348 2.79762 24.8934 2.66699 24.5521 2.66699ZM24.5521 5.88574L26.1146 7.44824L24.3906 9.1722L22.8281 7.6097L24.5521 5.88574ZM20.9427 9.49512L22.5052 11.0576L8.22917 25.3337H6.66667V23.7712L20.9427 9.49512Z"
                                    fill="black"/>
                            </svg>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.3333 2.66699L12 4.00033H4V6.66699H5.47917L7.85677 27.0081V27.0186C8.03147 28.3341 9.17376 29.3337 10.5 29.3337H21.4974C22.8236 29.3337 23.9659 28.3341 24.1406 27.0186L24.1432 27.0081L26.5208 6.66699H28V4.00033H20L18.6667 2.66699H13.3333ZM8.16667 6.66699H23.8333L21.4974 26.667H10.5L8.16667 6.66699Z"
                                    fill="#B13434"/>
                            </svg>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
</section>

