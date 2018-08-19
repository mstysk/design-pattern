# Iterator(反復子)
要素を順番にスキャンしていくインタフェース(API)定める。
サンプルプログラムでは、Iteratorインタフェースがこの役をつとめ、
次の要素が存在するかどうかを得るためのhasNextメソッドと、
次の要素を得るためのnextメソッドを定めています。

# ConcreteIterator(具体的な反復子)
Iterator役が定めたインタフェース(API)を実際に実装する役です。
サンプルプログラムでは、BookShelfIteratorがこの役を勤めました。
この役はスキャンするために必要な情報を持っている必要があります。
サンプルプログラムでは、BookShelfクラスのインスタンスをbookShelfフィールドで覚えており、
注目している本をindexフィールドで覚えてました

# Aggregate(集合体)
Iteratorを作り出すインタフェース(API)を定める役です。
そのインタフェースは、「和菓子が持っている要素を順番にスキャンしてくれる人」を
作り出すメソッドということになります。

# ConcreteAggregate(具体的な集合体)
Aggregateが定めたインタフェース（API）を実際に実装する役です。
具体的な」Iterator、すなわちConcreteIteratorのインスタンスを作ります。
サンプルプログラムでは、BookShelfクラスがこの役を勤めました。

# 関連しているパターン

## Visitor pattern
## Composite pattern
## Factory Mehtod pattern
