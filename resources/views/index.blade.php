<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Category One">Categoria 1</option>
                <option value="Category Two">Categoria 2</option>
                <option value="Category Three">Categoria 3</option>
                <option value="Category Four">Categoria 4</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Filter One">Filtro 1</option>
                <option value="Filter Two">Filtro 2</option>
                <option value="Filter Three">Filtro 3</option>
                <option value="Filter Four">Filtro 4</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                class="w-full rounded-xl bg-white px-4 py-3 pl-8 border-none placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-card bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="text-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votos</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Voto</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Um título aleatório pode ir aqui</a>
                    </h4>
                    <div class="text-gray-600 mt-6 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga corporis, quidem error esse quisquam rerum explicabo, iure asperiores, quam quo? Quibusdam officiis, facilis voluptate praesentium cum magni! Maxime, rerum est non magni necessitatibus obcaecati maiores, beatae, delectus fugiat neque odio ipsa in sapiente deleniti nihil sit iusto debitis tempora numquam. Rem magnam nobis, similique dolorum porro amet commodi soluta maiores non dolores ab velit consectetur fugit sint veniam aliquid modi facere aspernatur repellat inventore reiciendis unde excepturi? Ut cum nesciunt unde quod nemo exercitationem similique quam eligendi in dolorem, commodi aliquid officiis eos, animi accusantium provident, cupiditate aliquam doloremque?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 horas atrás</div>
                            <div> &bull; </div>
                            <div>Categoria 1</div>
                            <div> &bull; </div>
                            <div class="text-gray-900">3 Comentários</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                                  <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                      <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Fazer como spam</a></li>
                                      <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Apague a postagem</a></li>
                                  </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container hover:shadow-card bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="text-semibold text-2xl text-blue">66</div>
                    <div class="text-gray-500">Votos</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-blue border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Votou</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Outro título aleatório pode ir aqui</a>
                    </h4>
                    <div class="text-gray-600 mt-6 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga corporis, quidem error esse quisquam rerum explicabo, iure asperiores, quam quo? Quibusdam officiis, facilis voluptate praesentium cum magni! Maxime, rerum est non magni necessitatibus obcaecati maiores, beatae, delectus fugiat neque odio ipsa in sapiente deleniti nihil sit iusto debitis tempora numquam. Rem magnam nobis, similique dolorum porro amet commodi soluta maiores non dolores ab velit consectetur fugit sint veniam aliquid modi facere aspernatur repellat inventore reiciendis unde excepturi? Ut cum nesciunt unde quod nemo exercitationem similique quam eligendi in dolorem, commodi aliquid officiis eos, animi accusantium provident, cupiditate aliquam doloremque?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 horas atr´s</div>
                            <div> &bull; </div>
                            <div>Categoria 1</div>
                            <div> &bull; </div>
                            <div class="text-gray-900">3 Comentários</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow text-xxs font-bold uppercase leading-none rounded-full text-center text-white w-28 h-7 py-2 px-4">In Progress</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                                  {{-- <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                      <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                      <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                  </ul> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container hover:shadow-card bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="text-semibold text-2xl">0</div>
                    <div class="text-gray-500">Votos</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Voto</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Ainda outro título aleatório pode ir aqui</a>
                    </h4>
                    <div class="text-gray-600 mt-6 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga corporis, quidem error esse quisquam rerum explicabo, iure asperiores, quam quo? Quibusdam officiis, facilis voluptate praesentium cum magni! Maxime, rerum est non magni necessitatibus obcaecati maiores, beatae, delectus fugiat neque odio ipsa in sapiente deleniti nihil sit iusto debitis tempora numquam. Rem magnam nobis, similique dolorum porro amet commodi soluta maiores non dolores ab velit consectetur fugit sint veniam aliquid modi facere aspernatur repellat inventore reiciendis unde excepturi? Ut cum nesciunt unde quod nemo exercitationem similique quam eligendi in dolorem, commodi aliquid officiis eos, animi accusantium provident, cupiditate aliquam doloremque?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 horas atr´s</div>
                            <div> &bull; </div>
                            <div>Categoria 1</div>
                            <div> &bull; </div>
                            <div class="text-gray-900">3 Comentários</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-red text-xxs font-bold uppercase leading-none rounded-full text-center text-white w-28 h-7 py-2 px-4">Closed</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                                  {{-- <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                      <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                      <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                  </ul> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container hover:shadow-card bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="text-semibold text-2xl">22</div>
                    <div class="text-gray-500">Votos</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Voto</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Mais um título aleatório pode ir aqui</a>
                    </h4>
                    <div class="text-gray-600 mt-6 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga corporis, quidem error esse quisquam rerum explicabo, iure asperiores, quam quo? Quibusdam officiis, facilis voluptate praesentium cum magni! Maxime, rerum est non magni necessitatibus obcaecati maiores, beatae, delectus fugiat neque odio ipsa in sapiente deleniti nihil sit iusto debitis tempora numquam. Rem magnam nobis, similique dolorum porro amet commodi soluta maiores non dolores ab velit consectetur fugit sint veniam aliquid modi facere aspernatur repellat inventore reiciendis unde excepturi? Ut cum nesciunt unde quod nemo exercitationem similique quam eligendi in dolorem, commodi aliquid officiis eos, animi accusantium provident, cupiditate aliquam doloremque?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 horas atr´s</div>
                            <div> &bull; </div>
                            <div>Categoria 1</div>
                            <div> &bull; </div>
                            <div class="text-gray-900">3 Comentários</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-green text-xxs font-bold uppercase leading-none rounded-full text-center text-white w-28 h-7 py-2 px-4">Implement</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                                  {{-- <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                      <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                      <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                  </ul> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="idea-container hover:shadow-card bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="text-semibold text-2xl">2</div>
                    <div class="text-gray-500">Votos</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Voto</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Último título aleatório pode ir aqui</a>
                    </h4>
                    <div class="text-gray-600 mt-6 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga corporis, quidem error esse quisquam rerum explicabo, iure asperiores, quam quo? Quibusdam officiis, facilis voluptate praesentium cum magni! Maxime, rerum est non magni necessitatibus obcaecati maiores, beatae, delectus fugiat neque odio ipsa in sapiente deleniti nihil sit iusto debitis tempora numquam. Rem magnam nobis, similique dolorum porro amet commodi soluta maiores non dolores ab velit consectetur fugit sint veniam aliquid modi facere aspernatur repellat inventore reiciendis unde excepturi? Ut cum nesciunt unde quod nemo exercitationem similique quam eligendi in dolorem, commodi aliquid officiis eos, animi accusantium provident, cupiditate aliquam doloremque?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 horas atr´s</div>
                            <div> &bull; </div>
                            <div>Categoria 1</div>
                            <div> &bull; </div>
                            <div class="text-gray-900">3 Comentários</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-purple text-xxs font-bold uppercase leading-none rounded-full text-center text-white w-28 h-7 py-2 px-4">Considering</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                  </svg>
                                  {{-- <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                      <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                      <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Post</a></li>
                                  </ul> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
