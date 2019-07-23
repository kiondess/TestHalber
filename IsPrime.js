function IsPrime(number)
{

  if (number===1)
  {
    return false;
  }
  else if(number === 2)
  {
    return true;
  }else
  {
    for(var a = 2; a < number; a++)
    {
      if(number % a === 0)
      {
        return false;
      }
    }
    return true;  
  }
}

console.log(IsPrime(3));