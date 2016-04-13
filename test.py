s='AA'
def change(s):
    result=0
    lens=len(s)
    for key,value in enumerate(s):
        result+=(ord(value)-ord("A")+1)*pow(26,lens-1-key)
    return result
result=change(s)
print result
