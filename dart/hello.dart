import "dart:collection";

void main(){
  var a = GenericExample().printType();
}

class GenericExample<E>{
  void printType(){
    print("$E");
  }

  genericMethod<M>(){
    print("class:$E, method: $M");
  }
}
