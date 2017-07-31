## testeIntervalos
 - Disciplina de teste TDD ifrn

## Alunos
 - Adrianny Reis
 - Francisca Leísia

## Problema disponivel em:
  - http://dojopuzzles.com/problemas/exibe/intervalos/

## Plano de teste
 - Variaveis
   - lista
 - Condições
   - lista.size > 0
   - lista.type == int
 - Valores Válidos
   - lista.size > 0
   - lista.type == int
 - Valores Inválidos
   - lista.size <= 0
   - lista.type != int

## Classes de equivalencia (plano de teste)
  - Case 1 value ([10, 11, 12, 20, 21, 22])
    - lista.size > 0 (true)
  - Case 2 value ([])
    - lista.size <= 0 (false)
  - Case 3 value ([10, 11, 12, 20, 21, 22])
    - lista.type == int (true)
  - Case 4 value ([“10”, “11”, “12”, “20”, ”21”, “22”])
    - lista.type != int (false)
