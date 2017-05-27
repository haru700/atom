completion:^(NSData *output){
  const char *firstLine = [[NSSTring stringWithFromat:@"> %@\n\n", code] UTF8String];
  NSMutableData *data = [NSMutableData dataWithBytes:firstLine length:strlen(firstLine)];

  [data appendData:output];
}
