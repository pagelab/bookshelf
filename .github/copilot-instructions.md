# Bookshelf Theme - Copilot Instructions

> "Verba volant, scripta manent"

## 📖 Visão Geral

**Bookshelf** é um tema WordPress de blocos (FSE) especializado para **autores, editoras, livrarias e instituições** que desejam apresentar e promover publicações como livros, eBooks, revistas e artigos acadêmicos.

### Informações do Projeto

| Campo | Valor |
|-------|-------|
| **Nome** | Bookshelf |
| **Tipo** | WordPress Block Theme (FSE) |
| **Text Domain** | `bookshelf` |
| **Namespace PHP** | `Bookshelf` |
| **Prefixo CSS** | `bks-` |
| **Constante de versão** | `BOOKSHELF_VERSION` |
| **Requisitos** | WordPress 6.9+, PHP 7.4+ |
| **Licença** | GPL v2 or later |

---

## 🎯 Missão e Posicionamento

### Tagline
> "Bring the magic of a real bookshelf to your digital presence"

### Proposta de Valor
Transformar websites em experiências interativas de livraria, diferenciando-se de temas genéricos através de:

1. **Experiência Interativa** - Capas 3D, estantes animadas, flipbooks
2. **Metáfora Visual** - Design inspirado em livrarias e bibliotecas reais
3. **Público Profissional** - Editoras, livrarias, instituições acadêmicas
4. **Múltiplos Formatos** - Livros físicos, eBooks, PDFs, revistas, papers

### Diferencial Competitivo

```
Concorrentes (ex: Aster Ebooks):
- Apresentação estática tradicional
- Focado em autores individuais
- Layout de blog/catálogo

Bookshelf:
- Experiência de livraria interativa
- Para profissionais do mercado editorial
- Metáfora visual de estante real
```

---

## 🏗️ Arquitetura Técnica

### Estrutura de Diretórios

```
bookshelf/
├── assets/
│   ├── css/
│   │   ├── editor/           # Estilos do editor
│   │   ├── front-end/        # Estilos do front-end
│   │   └── shared/           # Estilos compartilhados
│   │       ├── blocks/       # CSS por bloco core
│   │       └── block-styles/ # CSS por estilo customizado
│   ├── fonts/                # Fontes locais
│   ├── img/                  # Imagens
│   └── svg/                  # Ícones SVG
├── inc/
│   ├── block-styles.php      # Registro de block styles
│   ├── extra-functions.php   # Funções auxiliares
│   └── patterns.php          # Categorias de patterns
├── parts/                    # Template parts
├── patterns/                 # Block patterns
├── src/
│   └── scss/                 # Arquivos fonte SCSS
├── styles/                   # Variações de estilo (JSON)
├── templates/                # Templates de página
├── functions.php             # Funções principais
├── style.css                 # Metadados do tema
└── theme.json                # Configurações globais
```

### Convenções de Código

#### PHP
- **Namespace**: `Bookshelf`
- **Hooks**: Usar `__NAMESPACE__ . '\\function_name'`
- **Escapamento**: Sempre escapar saídas (`esc_html__`, `esc_attr`, etc.)
- **Text Domain**: `'bookshelf'` para todas as strings traduzíveis

#### CSS/SCSS
- **Prefixo de classes**: `bks-`
- **Block styles**: `is-style-bks-{nome}`
- **Handles de enqueue**: `bks-{contexto}` (ex: `bks-front-end`)
- **Arquivos**: Nome do bloco + classe (ex: `button--is-style-bks-button-flat.css`)

#### JavaScript
- **Build**: Via `@wordpress/scripts`
- **Output**: `assets/js/`

### Integrações Obrigatórias

1. **Cover3D Block Plugin** - Capas 3D de livros (versão free)
2. **WooCommerce** - Venda de publicações (já implementado)
3. **Contact Form 7** - Formulários de captura

---

## 📋 Roadmap de Desenvolvimento

### Fase 1: MVP Diferenciado (PRIORIDADE CRÍTICA)

#### 1.1 Patterns de Livros (Criar)

| Pattern | Slug | Descrição | Prioridade |
|---------|------|-----------|------------|
| Book Showcase Single | `bookshelf/book-showcase` | Exibição de livro único com Cover3D | 🔴 Alta |
| Book Shelf Row | `bookshelf/book-shelf-row` | Linha de estante com 3-5 livros | 🔴 Alta |
| Featured Book Hero | `bookshelf/featured-book-hero` | Hero section de lançamento | 🔴 Alta |
| Author Spotlight | `bookshelf/author-spotlight` | Destaque do autor com suas obras | 🟡 Média |
| Book Grid | `bookshelf/book-grid` | Grade de livros (2x3, 3x4) | 🟡 Média |
| New Arrivals | `bookshelf/new-arrivals` | Carousel de novidades | 🟡 Média |
| Series Collection | `bookshelf/series-collection` | Coleção/série de livros | 🟢 Baixa |

#### 1.2 CSS de Estante (Criar)

```scss
// Efeitos visuais necessários:
- Sombras de profundidade para livros
- Textura/cor de prateleira de madeira
- Hover states (livro "sai" da estante)
- Efeito de inclinação 3D
- Gradiente de iluminação
```

#### 1.3 Integração Cover3D (Completar)

- [ ] Criar patterns que utilizem o bloco `cover3d/book`
- [ ] Documentar configurações recomendadas
- [ ] Estilos CSS complementares

### Fase 2: Diferenciação Visual

#### 2.1 Variações de Estilo (Criar em `/styles/`)

| Variação | Arquivo | Público-alvo |
|----------|---------|--------------|
| Academic | `academic.json` | Universidades, bibliotecas |
| Bookstore | `bookstore.json` | Livrarias físicas/online |
| Author | `author.json` | Autores independentes |
| Publisher | `publisher.json` | Editoras profissionais |

#### 2.2 Assets Visuais (Criar em `/assets/`)

- [ ] Ícones SVG: livro, estante, leitura, bookmark, etc.
- [ ] Texturas: madeira, papel, couro
- [ ] Padrões decorativos editoriais

### Fase 3: Funcionalidades Pro (Futuro)

#### 3.1 Custom Post Type "Books"

```php
// Campos planejados:
- Título
- Autor(es)
- ISBN
- Editora
- Ano de publicação
- Número de páginas
- Formato (físico/digital)
- Preço
- Link de compra
- Capa (imagem)
- Sinopse
- Categoria/Gênero
```

#### 3.2 Integrações Avançadas

| Plugin | Funcionalidade |
|--------|----------------|
| 3D Flipbook (dFlip) | Folhear páginas interativamente |
| Real3D Flipbook | Estantes 3D completas |
| Library Bookshelves | Sistema de biblioteca |
| WP Query Builder | Queries avançadas de livros |

#### 3.3 Funcionalidades Premium

- [ ] Front-end submission de livros
- [ ] Schema.org markup automático (`Book`, `Author`, `Publisher`)
- [ ] Importação via ISBN (API lookup)
- [ ] Integração Goodreads
- [ ] Sistema de reviews/ratings
- [ ] Wishlist/Reading list

---

## 🎨 Design System

### Paleta de Cores

```
Base:       #ffffff (fundo)
Contrast:   #171717 (texto)
Primary:    #002cef (azul - ações)
Secondary:  #465465 (cinza - suporte)
Error:      #c62828 (vermelho - alertas)
```

### Tipografia

| Uso | Fonte | Fallback |
|-----|-------|----------|
| Corpo | Source Sans 3 | system-ui |
| Títulos | Source Serif 4, Roboto Slab | serif |
| Display | Antonio | sans-serif |
| Código | Source Code Pro | monospace |

### Espaçamento

Sistema fluido com `clamp()`:
- `10`: Micro (0.31rem)
- `20`: Tiny (0.56-0.63rem)
- `30`: Extra small (0.88-0.94rem)
- `40`: Small (1.13-1.25rem)
- `50`: Medium (1.69-1.88rem)
- `60`: Large (2.25-2.50rem)
- `80`: X-Large (4.50-5rem)

### Layout

```
Content: 40rem (~640px)
Wide:    60rem (~960px)
```

---

## ✅ Checklist de Qualidade

### Antes de cada commit:

- [ ] Strings traduzíveis com text domain `'bookshelf'`
- [ ] Classes CSS com prefixo `bks-`
- [ ] Escapamento de saídas PHP
- [ ] Responsividade testada (mobile, tablet, desktop)
- [ ] Acessibilidade básica (contraste, foco, alt text)
- [ ] Performance (CSS condicional, lazy loading)

### Antes de release:

- [ ] Validação Theme Check
- [ ] Teste com WordPress latest
- [ ] Teste com PHP 7.4 e 8.x
- [ ] Teste com WooCommerce
- [ ] Teste com Cover3D plugin
- [ ] Screenshots atualizados
- [ ] README.txt atualizado
- [ ] Changelog atualizado

---

## 📚 Referências de Design

### Sites de Inspiração

- https://betsy-ashton.com/books/
- https://www.tromsite.com/trombooks/
- https://www.colonielibrary.org/borrow/new-titles/

### Figma

- https://www.figma.com/design/z0lPTrpEfxLhQ3BNqAUSSz/bookshelf-website--Community-

### Plugins de Referência

- Cover3D: https://wordpress.org/plugins/flavor-flavor-flavor-flavor/flavor-flavor-flavor/
- 3D Flipbook: https://wordpress.org/plugins/3d-flipbook-dflip-lite/
- Real3D Flipbook: https://real3dflipbook.com/
- Library Bookshelves: https://wordpress.org/plugins/library-bookshelves/

---

## 🤖 Instruções para o Copilot

### Ao criar novos patterns:

1. Usar categoria apropriada (`bookshelf-{categoria}`)
2. Incluir `'blockTypes'` quando aplicável
3. Keywords relevantes para busca
4. Viewport width adequado para preview
5. Traduzir título e descrição

```php
<?php
/**
 * Title: Nome do Pattern
 * Slug: bookshelf/nome-do-pattern
 * Categories: bookshelf-products
 * Keywords: book, shelf, display
 * Block Types: core/group
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"align":"full"} -->
...
<!-- /wp:group -->
```

### Ao criar block styles:

1. Registrar em `inc/block-styles.php`
2. Criar CSS em `src/scss/shared/block-styles/`
3. Nomear arquivo: `{bloco}--is-style-bks-{nome}.scss`
4. Usar prefixo `bks-` no nome do estilo

### Ao modificar theme.json:

1. Manter organização por seções
2. Usar CSS custom properties quando possível
3. Testar no editor E no front-end
4. Documentar mudanças significativas

### Ao trabalhar com Cover3D:

1. Verificar se o bloco `cover3d/book` está disponível
2. Usar configurações de cor do theme.json
3. Criar fallback para quando plugin não está ativo
4. Documentar dependência no pattern

---

## 📝 Notas de Desenvolvimento

### Estado Atual (Dezembro 2025)

- ✅ Infraestrutura técnica sólida
- ✅ Suporte WooCommerce completo
- ✅ Sistema de CSS condicional
- ✅ Modo escuro
- ❌ Patterns de livros: 0 implementados
- ❌ Visual de estante: não implementado
- ❌ Schema markup: não implementado

### Prioridade Imediata

**Criar os patterns de livros é a prioridade #1** - sem eles, o tema não entrega sua proposta de valor.

### Origem do Projeto

Este tema foi derivado do tema Épico (https://www.uberfacil.com/epico/), refatorado e especializado para o nicho editorial.
