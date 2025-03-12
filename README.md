<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

##  Instalação e Configuração o ambiente 

### 1. Clonar o repositório
```bash
git clone git@github.com:luispaulo/docker-laravel.git
cd docker-laravel
```

### 2. Preparando arquivo .env
- Crie o arquivo .env
```bash
cp .env.example .env
```

### 3. Subir o ambiente Docker
```bash
docker-compose up --build -d
```

### 4. Acessando o ambiente

```bash
Agora, o Laravel estará rodando em ` http://localhost:8000`  🚀
```

### 5. Implemente a função todasStringsMaisLongas em PHP:

- Rota para testar todasStringsMaisLongas:
```bash
curl -X GET http://localhost:8000/longest-strings
```

- Validando array:
```bash
Criar novo usuario:  curl -X POST http://localhost:8000/longest-strings \
     -H "Content-Type: application/json" \
     -d '{ "inputArray": ["aba", "aa", "ad", "vcd", "aba"] }'
```
