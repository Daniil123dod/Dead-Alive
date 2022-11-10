<?php

use Illuminate\Support\Facades\Route;

/*
|------------------------------------------------------------------------—
| Web Routes
|------------------------------------------------------------------------—
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'Blockone' => 'The Elder Scrolls 5: Skyrim',
        'contentone' => 'The Elder Scrolls V: Skyrim - это приключенческая ролевая игра, пятая часть в серии The Elder Scrolls,
 с огромным открытым миром, который с самого начала полностью доступен для исследования.
 Игрокам предстоит выступить в роли Довакина, Драконорожденного, который появляется в провинции Скайрим аккурат во время возвращения легендарных драконов,
  которые, по преданию, собираются разрушить мир. Довакину предстоит преодолеть множество трудностей на пути к своей цели - остановить драконьего повелителя Алдуина,
   который готовится обрушить свою ярость на весь мир.',
        'Blocktwo' => 'Minecraft',
        'contenttwo' => ' Minecraft - это инди-игра в жанре песочницы с элементами выживания и открытым миром.
 По стилю, мир игры полностью состоит из блоков (ландшафт, предметы, мобы, игрок), и для текстурирования используются текстуры с низким разрешением (16×16 текселей).
  Изначально игра разработана шведским программистом Маркусом Перссоном , известным также как «Notch».
   Игра была задумана как клон игры Infiniminer, хотя Перссон выражал желание уподобить её геймплей игре Dwarf Fortress.
    Игра написана на Java с использованием библиотеки LWJGL.',
        'Blockthree' => 'Portal 2',
        'contentthree' => 'Portal 2 - вторая часть головоломки от первого лица от компании Valve, продолжающая эксперименты над игроком и порталами.
 Со времен первой части игры прошло много лет, и лаборатория Aperture лежит в руинах.
  Главная героиня игры, Челл, приходит в себя в одной из многочисленных камер внутри лаборатории, и предпринимает очередную попытку побега из лаборатории,
   которая заканчивается совершенно не так, как девушка предполагала. Героине предстоит узнать много нового о прошлом компании,
    познакомиться с совершенно новыми героями и даже помочь старой противнице в ее нелегкой миссии.',
        'Blockfore' => 'Diablo 3',
        'contentfore' => 'Diablo III - События игры разворачиваются спустя двадцать лет после событий Lord of Destruction - Камень Мира уничтожен,
 однако силы Зла лишились своих предводителей. Теперь в бой идут Младшие воплощения Зла - Азмодан и Белиал,
  двое генералов Преисподней, которые пытаются захватить Сакнктуарий. Им противостоят герои-нефалемы - люди,
   рожденные от союза ангелов и демонов, и которым дарована необыкновенная сила.
    Их цель - уничтожить Младшие воплощения Зла и пресечь все их попытки захватить мир людей.',

    ]);
});
