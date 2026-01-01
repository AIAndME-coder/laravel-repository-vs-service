<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Architecture Patterns: Repository vs Service vs Simple

> **A practical comparison of three different approaches to building Product CRUD in Laravel**

When building Laravel applications, one question always comes up: **What is the best way to structure your code?** This repository demonstrates three popular architectural patterns side-by-side, helping you understand when to use each approach.

---

## 🎯 What's Inside

This project implements the **same Product CRUD feature** in three different ways:

1. **Simple/Traditional Approach** - Direct Model interaction
2. **Repository Pattern** - Data abstraction layer
3. **Service Layer** - Business logic separation

Each approach has its own:
- ✅ Route group (`/simple`, `/repository`, `/service`)
- ✅ Controller implementation
- ✅ Complete CRUD operations
- ✅ Blade views

You can run all three approaches **simultaneously** and see the architectural differences in action.

---

## 📊 Architecture Flow Comparison

```
┌─────────────────────────────────────────────────────────────────┐
│                    REQUEST FROM USER                            │
└─────────────────────────────────────────────────────────────────┘
                              │
                ┌─────────────┼─────────────┐
                │             │             │
                ▼             ▼             ▼
    
┌───────────────────┐  ┌──────────────────┐  ┌──────────────────┐
│  SIMPLE APPROACH  │  │ REPOSITORY       │  │  SERVICE LAYER   │
└───────────────────┘  └──────────────────┘  └──────────────────┘

┌─────────────────────────────────────────────────────────────────┐
│ Route → Controller → Model → Database                           │
│                                                                  │
│ Pros: Fast, Simple                                              │
│ Cons: Fat Controllers, Mixed Logic                              │
└─────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────┐
│ Route → Controller → Interface → Repository → Model → Database  │
│                                                                  │
│ Pros: Data Abstraction, Testable                               │
│ Cons: Boilerplate, Overengineering                             │
└─────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────┐
│ Route → Controller → Service → Model → Database                 │
│                                                                  │
│ Pros: Clean Logic, Laravel-friendly                            │
│ Cons: Can bloat if not disciplined                             │
└─────────────────────────────────────────────────────────────────┘
```

---

## 🏗️ Approach #1: Simple/Traditional Laravel

### How It Works

Controllers directly interact with Eloquent models. No additional layers.

```php
// SimpleProductController.php
public function store(Request $request)
{
    $validated = $request->validate([...]);
    Product::create($validated);
    return redirect()->route('simple.products.index');
}
```

### File Structure
```
app/Http/Controllers/SimpleProductController.php
app/Models/Product.php
```

### ✅ Pros
- 🚀 **Fast development** - Minimal boilerplate
- 📝 **Easy to understand** - Straightforward code flow
- 🎯 **Perfect for small projects** - No over-engineering
- 💡 **Follows Laravel conventions** - The "Laravel way"

### ❌ Cons
- 📦 **Fat controllers** - Business logic lives in controllers
- 🔄 **Hard to reuse** - Logic tied to HTTP layer
- 🧪 **Difficult to test** - Tightly coupled to framework
- 🔀 **Mixed concerns** - Validation, business logic, HTTP responses all together

### 💡 When to Use
- Small projects (1-3 developers)
- Simple CRUD applications
- Prototypes and MVPs
- Learning Laravel basics

---

## 🏗️ Approach #2: Repository Pattern

### How It Works

Adds an abstraction layer between controllers and data access. Controllers depend on interfaces, not concrete implementations.

```php
// RepositoryProductController.php
public function __construct(ProductRepositoryInterface $repository)
{
    $this->repository = $repository;
}

public function store(Request $request)
{
    $validated = $request->validate([...]);
    $this->repository->create($validated);
    return redirect()->route('repository.products.index');
}
```

### File Structure
```
app/Http/Controllers/RepositoryProductController.php
app/Repositories/Interfaces/ProductRepositoryInterface.php
app/Repositories/ProductRepository.php
app/Providers/AppServiceProvider.php (bindings)
app/Models/Product.php
```

### ✅ Pros
- 🎯 **Clean separation** - Data access logic isolated
- 🧪 **Highly testable** - Easy to mock repositories
- 🔄 **Flexible data sources** - Switch between DB, API, cache
- 🏢 **Enterprise-ready** - Good for large, complex systems

### ❌ Cons
- 📝 **Lots of boilerplate** - Interface + Implementation + Binding
- ⚙️ **Overengineering risk** - Unnecessary for simple apps
- 🐌 **Slower development** - More files to maintain
- 🤔 **Laravel already abstracts** - Eloquent is already a repository-like pattern

### 💡 When to Use
- Large enterprise applications
- Multiple data sources (DB + API + Cache)
- Large teams (10+ developers)
- When you need to switch database providers
- Complex query logic that needs isolation

---

## 🏗️ Approach #3: Service Layer

### How It Works

Business logic lives in service classes. Controllers stay thin and only handle HTTP concerns.

```php
// ServiceProductController.php
public function __construct(ProductService $service)
{
    $this->service = $service;
}

public function store(Request $request)
{
    $validated = $request->validate([...]);
    $this->service->createProduct($validated);
    return redirect()->route('service.products.index');
}
```

```php
// ProductService.php
public function createProduct(array $data): Product
{
    // Business logic: formatting, calculations, workflows
    $data['price'] = $this->formatPrice($data['price']);
    return $this->model->create($data);
}
```

### File Structure
```
app/Http/Controllers/ServiceProductController.php
app/Services/ProductService.php
app/Models/Product.php
```

### ✅ Pros
- 🎯 **Thin controllers** - Controllers only handle HTTP
- 💼 **Business logic isolation** - Clear responsibility separation
- 🔄 **Reusable logic** - Use services in commands, jobs, controllers
- 🚀 **Laravel-friendly** - Works naturally with the framework
- 🧪 **Testable** - Test business logic independently

### ❌ Cons
- 📦 **Can become bloated** - "God objects" if not careful
- 🎯 **Requires discipline** - Easy to mix concerns
- 🤔 **Still uses Eloquent directly** - No data abstraction

### 💡 When to Use
- Medium-sized projects (3-10 developers)
- Complex business logic (calculations, workflows)
- When controllers are getting fat
- **Recommended for most Laravel projects**

---

## 📋 Side-by-Side Comparison

| Feature | Simple | Repository | Service Layer |
|---------|--------|------------|---------------|
| **Complexity** | ⭐ Low | ⭐⭐⭐ High | ⭐⭐ Medium |
| **Boilerplate** | Minimal | Heavy | Moderate |
| **Testability** | ⭐⭐ Hard | ⭐⭐⭐⭐⭐ Excellent | ⭐⭐⭐⭐ Good |
| **Development Speed** | ⭐⭐⭐⭐⭐ Fast | ⭐⭐ Slow | ⭐⭐⭐ Moderate |
| **Maintainability** | ⭐⭐ Low | ⭐⭐⭐⭐ High | ⭐⭐⭐⭐ High |
| **Learning Curve** | ⭐ Easy | ⭐⭐⭐⭐ Steep | ⭐⭐ Moderate |
| **Best For** | Small apps | Enterprise | Medium apps |
| **Team Size** | 1-3 devs | 10+ devs | 3-10 devs |
| **Laravel Philosophy** | ✅ Aligned | ⚠️ Debatable | ✅ Aligned |

---

## 🎓 Repository Pattern in Laravel: The Debate

### Why Developers Argue About It

The Repository Pattern is often controversial in Laravel because:

1. **Laravel's Eloquent is Already an Abstraction**
   - Eloquent uses the Active Record pattern
   - You can already swap databases without changing queries
   - Models already abstract database operations

2. **Over-Engineering Risk**
   - Adding repositories just to wrap Eloquent methods
   - Creating interfaces that mirror Eloquent's API
   - Maintenance overhead for simple CRUD

3. **When It Actually Makes Sense**
   - Multiple data sources (MySQL + MongoDB + API)
   - Complex query building logic
   - Need to completely mock database layer
   - Switching between different ORMs

### The Verdict

> **Repository Pattern is NOT wrong, but it's often unnecessary in Laravel.**
> 
> If you're just wrapping `Product::all()` with `$repository->all()`, you're adding complexity without benefit.

---

## 🌳 Decision Tree: Which Approach to Use?

```
                    START: New Laravel Project
                              │
                              ▼
                    ┌─────────────────────┐
                    │ Project Complexity? │
                    └─────────────────────┘
                              │
            ┌─────────────────┼─────────────────┐
            ▼                 ▼                 ▼
      ┌──────────┐     ┌───────────┐     ┌──────────┐
      │  Small   │     │  Medium   │     │  Large   │
      │  1-3 dev │     │  3-10 dev │     │  10+ dev │
      └──────────┘     └───────────┘     └──────────┘
            │                 │                 │
            ▼                 ▼                 ▼
    ┌──────────────┐  ┌──────────────┐  ┌──────────────┐
    │   SIMPLE     │  │   SERVICE    │  │  REPOSITORY  │
    │   APPROACH   │  │   LAYER      │  │  + SERVICE   │
    └──────────────┘  └──────────────┘  └──────────────┘
            │                 │                 │
            ▼                 ▼                 ▼
    • Direct Model    • Business Logic  • Enterprise
    • Fast Dev        • Clean Code      • Multiple DBs
    • Small CRUD      • Medium Scale    • Large Teams
                                        • High Testability
```

---

## 🚀 Installation & Setup

### Prerequisites

- Docker and Docker Compose
- MySQL database (on host or container)

### Quick Start

```bash
# Clone the repository
git clone https://github.com/AIAndME-coder/laravel-repository-vs-service
cd laravel-repository-vs-service

# Copy environment file
cp .env.example .env

# Update database credentials in .env
DB_HOST=host.docker.internal
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=your_password

# Build and start Docker containers
docker-compose build
docker-compose up -d

# Install dependencies
docker-compose exec laravel-app composer install

# Generate application key
docker-compose exec laravel-app php artisan key:generate

# Run migrations
docker-compose exec laravel-app php artisan migrate

# Access the application
# Open http://localhost:8080
```

### Without Docker

```bash
# Install dependencies
composer install

# Run migrations
php artisan migrate

# Start server
php artisan serve

# Access at http://localhost:8000
```

---

## 🌐 Routes & Demo

Access each architectural approach at different routes:

| Approach | URL | Description |
|----------|-----|-------------|
| **Simple** | http://localhost:8080/simple/products | Traditional Laravel approach |
| **Repository** | http://localhost:8080/repository/products | Repository pattern implementation |
| **Service** | http://localhost:8080/service/products | Service layer pattern |

All three routes support full CRUD operations:
- `GET /products` - List all products
- `GET /products/create` - Create form
- `POST /products` - Store product
- `GET /products/{id}` - Show product
- `GET /products/{id}/edit` - Edit form
- `PUT /products/{id}` - Update product
- `DELETE /products/{id}` - Delete product

---

## 📁 Project Structure

```
app/
├── Http/Controllers/
│   ├── SimpleProductController.php      # Direct model access
│   ├── RepositoryProductController.php  # Uses repository
│   └── ServiceProductController.php     # Uses service layer
├── Models/
│   └── Product.php
├── Repositories/
│   ├── Interfaces/
│   │   └── ProductRepositoryInterface.php
│   └── ProductRepository.php
└── Services/
    └── ProductService.php

resources/views/
├── simple/products/                     # Views for simple approach
├── repository/products/                 # Views for repository approach
└── service/products/                    # Views for service approach

routes/
└── web.php                              # All route groups defined here
```

---

## ❌ Common Mistakes to Avoid

### Repository Pattern Anti-Patterns

```php
// ❌ BAD: Repository returning Eloquent Builder
public function getActive()
{
    return Product::where('active', true); // Returns Builder
}

// ✅ GOOD: Repository returns data
public function getActive(): Collection
{
    return Product::where('active', true)->get();
}
```

```php
// ❌ BAD: Repository with business logic
public function createWithDiscount(array $data)
{
    $data['price'] = $data['price'] * 0.9; // Business logic!
    return Product::create($data);
}

// ✅ GOOD: Business logic in Service
// Repository just handles data access
public function create(array $data): Product
{
    return Product::create($data);
}
```

```php
// ❌ BAD: Just wrapping Eloquent methods
class ProductRepository {
    public function all() { return Product::all(); }
    public function find($id) { return Product::find($id); }
}
// If this is all you're doing, skip the repository!

// ✅ GOOD: Add value with complex queries
class ProductRepository {
    public function getActiveWithCategories()
    {
        return Product::with('categories')
            ->where('active', true)
            ->where('stock', '>', 0)
            ->latest()
            ->get();
    }
}
```

### Service Layer Anti-Patterns

```php
// ❌ BAD: Service returning views
public function createProduct($data)
{
    $product = Product::create($data);
    return view('products.show', compact('product')); // NO!
}

// ✅ GOOD: Service returns data, controller handles views
public function createProduct($data): Product
{
    return Product::create($data);
}
```

```php
// ❌ BAD: God Object Service
class ProductService {
    public function create() {}
    public function update() {}
    public function sendEmail() {}
    public function generatePDF() {}
    public function processPayment() {}
    // Too many responsibilities!
}

// ✅ GOOD: Focused services
class ProductService { /* Product operations */ }
class EmailService { /* Email operations */ }
class PaymentService { /* Payment operations */ }
```

---

## 🤔 FAQ

### Q: Should I always use Repository Pattern?
**A:** No. Only use it when you have:
- Multiple data sources to abstract
- Complex query logic to isolate
- Need to completely mock the database layer
- Large enterprise application with multiple teams

For most Laravel projects, Service Layer is sufficient.

### Q: Can I use both Repository and Service together?
**A:** Yes! In large applications:
- **Repository** handles data access
- **Service** handles business logic
- **Controller** handles HTTP concerns

Example flow: `Controller → Service → Repository → Model → Database`

### Q: What does Taylor Otwell (Laravel creator) recommend?
**A:** Taylor generally recommends keeping it simple and following Laravel conventions. Don't add abstraction layers unless you have a clear need. Start simple, refactor when complexity demands it.

### Q: Is the Simple approach bad practice?
**A:** Not at all! For small applications, it's the best approach. Don't over-engineer. As your app grows, refactor to Service Layer when controllers get fat.

### Q: How do I test these different approaches?
```php
// Simple: Test via HTTP
public function test_can_create_product()
{
    $response = $this->post('/simple/products', [...]);
    $this->assertDatabaseHas('products', [...]);
}

// Repository: Mock the repository
public function test_repository_creates_product()
{
    $mock = $this->mock(ProductRepositoryInterface::class);
    $mock->shouldReceive('create')->once();
    // ...
}

// Service: Test business logic directly
public function test_service_formats_price()
{
    $service = new ProductService(new Product);
    $product = $service->createProduct(['price' => 10.5]);
    $this->assertEquals('10.50', $product->price);
}
```

---

## 🎯 Key Takeaways

1. **There is no one-size-fits-all architecture**
   - Choose based on project size and complexity
   - Start simple, refactor when needed

2. **Laravel is opinionated**
   - Fighting the framework creates more problems
   - Use Laravel's strengths (Eloquent, Collections, etc.)

3. **Recommended approach for most projects:**
   - ✅ Small → Simple/Traditional
   - ✅ Medium → Service Layer
   - ✅ Large/Enterprise → Repository + Service
   - ❌ Don't blindly follow patterns

4. **Focus on readability and maintainability**
   - Code should be easy to understand
   - Patterns should solve problems, not create them

---

## 🎥 YouTube Tutorial

This repository accompanies the YouTube tutorial: **"Laravel Architecture: Simple vs Repository vs Service Layer - Which Should You Use?"**

Watch the video for a complete walkthrough and explanation.

---

## 🤝 Contributing

Contributions are welcome! If you have improvements or find issues:

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

---

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## 🙏 Acknowledgments

- Built with [Laravel](https://laravel.com)
- Inspired by real-world architectural debates in the Laravel community
- Thanks to all developers who share their knowledge and experiences

---

<p align="center">Made with ❤️ for the Laravel community</p>

<p align="center">
  <strong>If this helped you understand Laravel architecture better, give it a ⭐️</strong>
</p>
