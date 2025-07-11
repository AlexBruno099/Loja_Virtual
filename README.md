# 🛒 Loja Virtual em PHP

> 🚀 Projeto em andamento para estudo, criado por [AlexBruno099](https://github.com/AlexBruno099) com o objetivo de aprender mais sobre desenvolvimento web utilizando PHP puro.

---

## ✨ Sobre o projeto

Este repositório é o meu laboratório pessoal para consolidar conhecimentos em **desenvolvimento web**, focando principalmente em **PHP** e no padrão **MVC**.  
A ideia é construir uma **loja virtual do zero**, explorando conceitos importantes como:

- Organização de código em **Model, View e Controller**
- Gerenciamento de dependências via **Composer**
- Configuração de **URLs amigáveis** usando `.htaccess`
- Tratamento de erros centralizado
- Fluxo completo de versionamento com **Git e GitHub**

---

## 🛠 Tecnologias e ferramentas

- **PHP** (puro, sem frameworks)
- **Composer** para dependências
- **Apache** com `.htaccess`
- **Git** e **GitHub** para versionamento

---

## 📂 Estrutura do projeto



├── controller/ # Lógica de controle e roteamento<BR>
├── lib/ # Bibliotecas auxiliares<BR>
├── model/ # Classes de dados e regras de negócio<BR>
├── view/ # Páginas e templates<BR>
├── .htaccess # Configuração para URLs amigáveis<BR>
├── composer.json # Dependências PHP<BR>
├── composer.lock<BR>
├── composer.phar<BR>
├── composerUpdate.bat # Script de atualização do Composer<BR>
├── erro.php # Página de erro<BR>
└── index.php # Front controller<BR>


---

## 🚀 Funcionalidades concluídas

✅ Estrutura inicial MVC  
✅ Configuração do Composer  
✅ URLs amigáveis via `.htaccess`  
✅ Página de erro personalizada  
✅ Commits frequentes documentando progresso

---

## 📜 Histórico de commits principais

| Hash      | Mensagem                      | Data         |
|-----------|-------------------------------|--------------|
| `617a6a6` | fix: Improving URLs           | 10 horas atrás |
| `f72c2b3` | feat: creating friendly URLs  | 10 horas atrás |
| `c39d1ee` | Feat: crating const.          | 10 horas atrás |
| `ad90a57` | feat: creating several pages | 2 dias atrás |
| `84d22f9` | feat: create composer         | 2 dias atrás |

> ⚙️ O projeto está em constante evolução, servindo como laboratório para testar e aplicar novos conceitos.

---

## 📝 Roadmap (o que ainda pretendo fazer)

- [ ] Banco de dados para produtos, usuários e pedidos
- [ ] Autenticação (login e cadastro)
- [ ] Carrinho de compras
- [ ] Checkout e finalização do pedido
- [ ] Painel administrativo
- [ ] Refatorações para padronizar o código
- [ ] Testes automatizados

---

## 👨‍💻 Sobre mim

<img align="left" src="https://avatars.githubusercontent.com/u/152203829?v=4" width="100px" style="border-radius:50%;" />

Olá, sou o **Alex Bruno**, programador e quality tester.  
Atualmente estudo diversas tecnologias para ampliar meu leque de habilidades, sempre em busca de evoluir e aplicar o que aprendo em projetos reais e desafiadores, como este.

<br clear="left"/>

---

## 🤝 Contribuições

Este projeto é **pessoal**, mas estou aberto a feedbacks ou sugestões para aprimorar ainda mais o código e as boas práticas.

---

## 🚀 Execute localmente

### ⚙️ Pré-requisitos
- PHP >= 7.4
- Composer
- Apache configurado com `mod_rewrite`
<BR>
### 🔥 Como rodar
```bash
git clone https://github.com/AlexBruno099/Loja_virtual.git
cd Loja_virtual
composer install
# Configure o Apache apontando para este diretório
# Acesse no navegador
http://localhost/Loja_virtual
```
---
📌 Licença
Este projeto é de uso educacional, sem licença específica.
Sinta-se livre para estudar, adaptar e evoluir a partir dele.

---
