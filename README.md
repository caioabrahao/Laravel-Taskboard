# Taskboard com Laravel

Opa **Claudinei**! 👋 Esse projeto é meu aprendizado inicial com PhP e Laravel baseado no projeto que você tinha me passado. Olhando ele eu percebi algumas coisas que podem definitivamente serem melhoradas então durante essa semana vou usar meu tempo para deixar tudo um pouco mais apresentável, mas sinta-se a vontade para explorar!

## 👨‍💻Setup do Ambiente:
Eu sei que vocês trabalham com Docker, então vou implementar o Laravel Sail numa branch e dar merge em breve, mas ta ai as instruções para um setup inicial para testes:

Rodar no diretório:
```bash
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
php artisan migrate
```

Ou, alternativamente, você pode rodar o script npm que eu criei:
```bash
npm run setup
```
Ele vai rodar tudo isso ai só que de uma vez só.

Depois é só rodar o servidor com:
```bash
php artisan serve
```
Mas você já sabe disso... 😉

## ℹ️ Detalhes para sua análise:
- Fiz a **autenticação** com Laravel Breeze
    >    Acho que fiz errado pq vcs usam Jetstream, vou correr atrás disso
- Fiz o **front-end** com Blade
    >    Experimentei de leve com Livewire mas não tem nada de Livewire nesse projeto.
- Usei **SQLite** como banco de dados
    >    Usei só pra tirar do papel, mas vou trocar pra MySQL assim que o Docker estiver pronto.

## É isso ai.
Não tá nada super sofisticado, mas espero que esteja satisfatório por agora! Como falei, até sexta é pra estar um pouquinho melhor! 👍