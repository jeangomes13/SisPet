Olá!, este projeto tem a finalidade de conclusão da materia de PHP, terceiro semestre da Faculdade Senac-DF.
https://qastack.com.br/programming/19576116/how-to-add-multiple-files-to-git-at-the-same-time
git init
git add (fica na area aguardando só pra ser empurrado pro palco que é o commit)
git add "Readme.md"
git commit -m "primeiro commit" (pra de fato comitar)
git branch -M "main" caso queira renomear o nome master
git remote add origin https://github.com/brazilmith/sispats3.git (remote> a conexão entre o repoLocal-GitHUB; add pra adicionar/ origin é o apelido/nome que está dando -- faça a conexão entre os dois)
git push -u origin main; e main é a branch principal em que quer empurrar

---

Quando você altera arquivos ou adiciona um novo no repositório, primeiro você deve prepará-los.

git add <file>
ou se você quiser encenar todos

git add .
Ao fazer isso, você está dizendo para obter os arquivos que deseja em seu próximo commit. Então você faz:

git commit -m 'your message here'
Você usa

git push origin master
onde origin é o branch do repositório remoto e master é o branch do seu repositório local.

---

resumo - da máquina para o github
git add
git status [se quiser ver o que está mandando]
git commit -m "mensagem"
git push origin main [manda o commit para o github.... aquele -u só usa na primeira vez]

---

branch é a ramificação do nosso projeto

- normalmente usadas para desenvolver uma feature (funcioanlidade), adidiocnar uma pagina nova no projeto, um botão etc
  Criando uma ramificacao/branch:
- git checkout -b ""
