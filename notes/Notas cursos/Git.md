Control l, limpio la consola linux
Para saber que comando he usado uso el history y si quiero repetir uno de esos comandos uso !#decomando y me lo repite ejemplo: !72

Para eliminar archivos del cache o ram es: 
git rm --cached name_file 
Esto seria igual a quitarle el git add 

Cambiar usuario git

```
git config --global user.email "tu@email.com"
git config --global user.name "Tu Nombre"
```

Ver las configuraciones de git
git config --list

Para salir de vim
esc shit zz
Para escribir 
esc i 


Se puede comprar commits 
git diff # commit_mas_viejo # segundo_commit_mas_actual

git show name_file 
Muestra toda la historia de ese archivo

![[Pasted image 20221119211459.png]]



Staging 
![[estados-git-0acb84f7-5080-4098-99d9-59012a3b8e86.webp]]


Reset 

git reset numberCommit --hard 
Nos devolverá todo el codigo a ese commit en especifico, 

Otra forma de devolverme a una version anterior 
git checkout numeroCommit 
git add --all
git commit -m""

# Git reset vs. Git rm
![[Diferencia entre Git reset y Git rm - Platzi.pdf]]

1.  git log --oneline - Te muestra el id commit y el título del commit.
2.  git log --decorate- Te muestra donde se encuentra el head point en el log.
3.  git log --stat - Explica el número de líneas que se cambiaron brevemente.
4.  git log -p- Explica el número de líneas que se cambiaron y te muestra que se cambió en el contenido.
5.  git shortlog - Indica que commits ha realizado un usuario, mostrando el usuario y el titulo de sus commits.
6.  git log --graph --oneline --decorate y
7.  git log --pretty=format:"%cn hizo un commit %h el dia %cd" - Muestra mensajes personalizados de los commits.
8.  git log -3 - Limitamos el número de commits.
9.  git log --after=“2018-1-2” ,
10.  git log --after=“today” y
11.  git log --after=“2018-1-2” --before=“today” - Commits para localizar por fechas.
12.  git log --author=“Name Author” - Commits realizados por autor que cumplan exactamente con el nombre.
13.  git log --grep=“INVIE” - Busca los commits que cumplan tal cual está escrito entre las comillas.
14.  git log --grep=“INVIE” –i- Busca los commits que cumplan sin importar mayúsculas o minúsculas.
15.  git log – index.html- Busca los commits en un archivo en específico.
16.  git log -S “Por contenido”- Buscar los commits con el contenido dentro del archivo.
17.  git log > log.txt - guardar los logs en un archivo txt


Guardar la URL del repositorio de GitHub con el nombre de origin 
```
git remote add origin URL
```

Verificar que la URL se haya guardado correctamente:
```
git remote
git remote -v
```

Traer la versión del repositorio remoto y hacer _merge_ para crear un _commit_ con los archivos de ambas partes. Podemos usar `git fetch` y `git merge` o solo `git pull` con el _flag_ `--allow-unrelated-histories`:

```
git pull origin master --allow-unrelated-histories
```

## Cómo generar tus llaves SSH

### 1. Generar tus llaves SSH**

Recuerda que es muy buena idea proteger tu llave privada con una contraseña.
```
ssh-keygen -t rsa -b 4096 -C "tu@email.com"
```

### 2. Terminar de configurar nuestro sistema.

**En Windows y Linux**:

-   Encender el “servidor” de llaves SSH de tu computadora:
```
eval $(ssh-agent -s)
```

Añadir tu llave SSH a este “servidor”:
```
ssh-add ruta-donde-guardaste-tu-llave-privada
```

```
git stash save "Cambio titulo de cabecera a Ingles, porque puedo"
```

```
git stash list
-----------------
stash@{0}: On english-version: Cambio titulo de cabecera a Ingles, porque puedo
```

git stash branch name_rama
Me haria una nueva rama con ese stash que tengo almacenado

Saber la historia de git
```bash
git reflog
```

Volver a ese commit
```
git reset --hard eff544f 
```


Ammed
https://stackoverflow.com/questions/8824971/how-to-amend-older-git-commit 
https://www.atlassian.com/es/git/tutorials/rewriting-history 

Puedo hacer correcciones en el código y solo haría un commit 

```
git commit --amend -m"texto nuevo"
```

Búsqueda de palabras en código 

git grep -n palabra_a_buscar

Búsqueda de palabras en commits

git log -S "palabra"

Comandos adicionales 
-   `git shortlog -sn`: muestra cuantos commit han hecho cada miembro del equipo.
-   `git shortlog -sn --all`: muestra cuantos commit han hecho cada miembro del equipo, hasta los que han sido eliminados.
-   `git shortlog -sn --all --no-merge`: muestra cuantos commit ha hecho cada miembro, quitando los eliminados sin los merges.
-   `git blame ARCHIVO`: muestra quien hizo cada cosa línea por línea.
-   `git COMANDO --help`:muestra como funciona el comando.
-   `git blame ARCHIVO -Llinea_inicial,linea_final`: muestra quien hizo cada cosa línea por línea, indicándole desde qué línea ver. Ejemplo -L35,50.
-   `git branch -r`: se muestran todas las ramas remotas.
-   `git branch -a`: se muestran todas las ramas, tanto locales como remotas